<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\ViewRenderer;
use App\Http\Request;
use App\Http\Response;
use App\Repository\AdminRepository;
use App\Service\SecurityService;

/**
 * Contrôleur d'authentification administrateur.
 * Gère la connexion, la déconnexion et la page de login.
 */
final class AuthController
{
    public function __construct(
        private readonly AdminRepository $adminRepository,
        private readonly ViewRenderer $viewRenderer,
        private readonly SecurityService $securityService,
    ) {}

    /**
     * Affiche la page de connexion.
     * Redirige vers le dashboard si déjà authentifié.
     */
    public function showLogin(Request $request): Response
    {
        if ($this->securityService->isAdmin()) {
            return Response::redirect(BASE_URL . '/admin/dashboard');
        }

        return $this->viewRenderer->renderResponse('pages/login.php', [
            'page_title'  => 'Connexion Administrateur',
            'flash_error' => $this->consumeFlash('flash_error'),
        ]);
    }

    /**
     * Traite le formulaire de connexion (pattern PRG).
     */
    public function processLogin(Request $request): Response
    {
        if (!$this->securityService->verifyCsrfToken($request->getBodyParam('csrf_token'))) {
            $_SESSION['flash_error'] = 'Jeton de sécurité invalide. Veuillez réessayer.';
            return Response::redirect(BASE_URL . '/login');
        }

        $username = trim($request->getBodyParam('username'));
        $password = $request->getBodyParam('password');

        if (!empty($username) && !empty($password)) {
            $admin = $this->adminRepository->findByUsername($username);

            if ($admin !== null && $admin->verifyPassword($password)) {
                session_regenerate_id(true);
                $_SESSION['is_admin']        = true;
                $_SESSION['admin_username']  = $admin->getUsername();

                return Response::redirect(BASE_URL . '/admin/dashboard');
            }
        }

        $_SESSION['flash_error'] = 'Identifiants incorrects.';
        return Response::redirect(BASE_URL . '/login');
    }

    /**
     * Déconnecte l'administrateur et détruit la session.
     */
    public function logout(Request $request): Response
    {
        $_SESSION = [];
        session_destroy();
        return Response::redirect(BASE_URL . '/');
    }

    /**
     * Consomme un message flash de la session (lecture et suppression).
     */
    private function consumeFlash(string $key): string
    {
        $message = $_SESSION[$key] ?? '';
        unset($_SESSION[$key]);
        return (string) $message;
    }
}
