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

// 6. Router (à créer lors de l'étape 2)
// require_once BASE_PATH . '/includes/router.php';
// dispatch_request($uri, $method, $pdo);

// Placeholder temporaire pour tester l'étape 1 sans erreur fatale
echo "<div style='font-family: sans-serif; padding: 2rem; background: #f8fafc;'>";
echo "<h1 style='color: #0f172a;'>Portfolio V1 - Front Controller Initialisé</h1>";
echo "<p><strong>BASE_PATH:</strong> " . htmlspecialchars(BASE_PATH) . "</p>";
echo "<p><strong>BASE_URL:</strong> " . htmlspecialchars(BASE_URL) . "</p>";
echo "<p><strong>URI Courante:</strong> " . htmlspecialchars($uri) . "</p>";
echo "<p><strong>Méthode HTTP:</strong> " . htmlspecialchars($method) . "</p>";
echo "<p><strong>Base de données:</strong> Connexion PDO établie avec succès vers " . htmlspecialchars($_ENV['DB_NAME']) . ".</p>";
echo "</div>";
