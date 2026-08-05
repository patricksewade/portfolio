<?php
declare(strict_types=1);

// Le dossier racine absolu du projet (ex: c:\wamp64\www\portfolio)
define('BASE_PATH', dirname(__DIR__));

// L'URL de base définie dans le .env (utile pour les assets)
define('BASE_URL', rtrim($_ENV['BASE_URL'] ?? '', '/'));
