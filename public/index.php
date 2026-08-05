<?php
declare(strict_types=1);

// 1. Durcissement des sessions (Sécurité)
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',
    'secure' => false, // TODO: Passer à true en production si HTTPS est forcé
    'httponly' => true, // Contre le vol par XSS
    'samesite' => 'Strict' // Contre le CSRF
]);
session_start();

// 2. Chargement de l'environnement (Fichier .env)
require_once dirname(__DIR__) . '/config/env_loader.php';
load_env(dirname(__DIR__) . '/.env');

// 3. Constantes globales
require_once dirname(__DIR__) . '/config/constants.php';

// 4. Initialisation de la base de données
require_once BASE_PATH . '/config/db_connection.php';
$pdo = get_db_connection();

// 5. Extraction de l'URI et de la Méthode HTTP
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$method = $_SERVER['REQUEST_METHOD'];

// 6. Router et Sécurité
require_once BASE_PATH . '/includes/utils/security_functions.php';
require_once BASE_PATH . '/includes/router.php';

// Dispatch de la requête
dispatch_request($uri, $method, $pdo);
