<?php
declare(strict_types=1);

/**
 * Établit et retourne une connexion PDO sécurisée vers la base de données.
 * Utilise le pattern Singleton de manière procédurale (variable statique).
 */
function get_db_connection(): PDO {
    static $pdo = null;

    if ($pdo === null) {
        $host = $_ENV['DB_HOST'] ?? '127.0.0.1';
        $port = $_ENV['DB_PORT'] ?? '3306';
        $db   = $_ENV['DB_NAME'] ?? 'portfolio_v1';
        $user = $_ENV['DB_USER'] ?? 'root';
        $pass = $_ENV['DB_PASS'] ?? '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
        
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Mode d'erreur strict (exceptions)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retourne systématiquement des tableaux associatifs
            PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactive l'émulation pour bloquer les injections avancées
        ];

        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            // En production, logger l'erreur dans un fichier, ne jamais afficher $e->getMessage() à l'écran
            error_log('Erreur de connexion PDO : ' . $e->getMessage());
            die('Erreur critique : Impossible de se connecter à la base de données.');
        }
    }

    return $pdo;
}
