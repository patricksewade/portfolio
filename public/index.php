<?php

declare(strict_types=1);

// ─── 1. Autoloader Composer (PSR-4) ──────────────────────────────────────────
require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Config\Database;
use App\Config\EnvLoader;
use App\Controller\AdminController;
use App\Controller\AdminProjectController;
use App\Controller\AuthController;
use App\Controller\ContactController;
use App\Controller\HomeController;
use App\Core\Router;
use App\Core\ViewRenderer;
use App\Http\Request;
use App\Repository\AdminRepository;
use App\Repository\MessageRepository;
use App\Repository\ProjectRepository;
use App\Service\SecurityService;
use App\Service\SmtpMailer;

// ─── 2. Session sécurisée ─────────────────────────────────────────────────────
session_set_cookie_params([
    'lifetime' => 0,
    'path'     => '/',
    'domain'   => '',
    'secure'   => false, // TODO: Passer à true en production (HTTPS)
    'httponly' => true,
    'samesite' => 'Strict',
]);
session_start();

// ─── 3. Chargement de l'environnement ─────────────────────────────────────────
EnvLoader::load(dirname(__DIR__) . '/.env');

// ─── 4. Constantes globales et Helpers ──────────────────────────────────────────
// Conservées pour compatibilité avec les templates existants.
require_once dirname(__DIR__) . '/config/constants.php';
require_once dirname(__DIR__) . '/src/helpers.php';

// ─── 5. Connexion PDO (Factory, pas de Singleton) ─────────────────────────────
$pdo = Database::createConnection();


// ─── 6. Instanciation des dépendances (Injection manuelle) ───────────────────
$viewRenderer      = new ViewRenderer(BASE_PATH . '/templates');
$securityService   = new SecurityService();
$projectRepository = new ProjectRepository($pdo);
$messageRepository = new MessageRepository($pdo);
$adminRepository   = new AdminRepository($pdo);
$smtpMailer        = new SmtpMailer();

$homeController    = new HomeController($projectRepository, $viewRenderer);
$authController    = new AuthController($adminRepository, $viewRenderer, $securityService);
$contactController = new ContactController($messageRepository, $smtpMailer, $viewRenderer, $securityService);
$adminController   = new AdminController($projectRepository, $messageRepository, $viewRenderer, $securityService);
$adminProjectController = new AdminProjectController($projectRepository, $viewRenderer, $securityService);

// ─── 7. Enregistrement des routes ─────────────────────────────────────────────
$router = new Router();

$router->addRoute('GET',  '/',                   HomeController::class,    'index');
$router->addRoute('GET',  '/mentions-legales',   HomeController::class,    'mentionsLegales');
$router->addRoute('GET',  '/login',              AuthController::class,    'showLogin');
$router->addRoute('POST', '/login',              AuthController::class,    'processLogin');
$router->addRoute('GET',  '/logout',             AuthController::class,    'logout');
$router->addRoute('POST', '/contact',            ContactController::class, 'process');
$router->addRoute('GET',  '/admin/dashboard',    AdminController::class,   'dashboard');
$router->addRoute('POST', '/admin/message/read', AdminController::class,   'markMessageRead');

$router->addRoute('GET',  '/admin/projects/create', AdminProjectController::class, 'create');
$router->addRoute('POST', '/admin/projects/create', AdminProjectController::class, 'create');
$router->addRoute('GET',  '/admin/projects/edit',   AdminProjectController::class, 'edit');
$router->addRoute('POST', '/admin/projects/edit',   AdminProjectController::class, 'edit');
$router->addRoute('POST', '/admin/projects/delete', AdminProjectController::class, 'delete');

// ─── 8. Dispatch + envoi de la réponse ────────────────────────────────────────
$request = Request::fromGlobals();

$controllers = [
    HomeController::class    => $homeController,
    AuthController::class    => $authController,
    ContactController::class => $contactController,
    AdminController::class   => $adminController,
    AdminProjectController::class => $adminProjectController,
];

$response = $router->dispatch($request, $controllers);
$response->send();
