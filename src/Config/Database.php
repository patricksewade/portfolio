<?php

declare(strict_types=1);

namespace App\Config;

/**
 * Factory pour créer la connexion PDO.
 * Remplace la fonction procédurale get_db_connection() et son anti-pattern Singleton.
 * La connexion est créée et injectée une seule fois dans le bootstrap (index.php).
 */
final class Database
{
    /**
     * Crée et retourne une nouvelle connexion PDO sécurisée.
     *
     * @throws \RuntimeException En cas d'échec de connexion.
     */
    public static function createConnection(): \PDO
    {
        $host    = $_ENV['DB_HOST'] ?? '127.0.0.1';
        $port    = $_ENV['DB_PORT'] ?? '3306';
        $db      = $_ENV['DB_NAME'] ?? 'portfolio_v1';
        $user    = $_ENV['DB_USER'] ?? 'root';
        $pass    = $_ENV['DB_PASS'] ?? '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";

        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            return new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            // Ne jamais exposer le message d'erreur en production.
            error_log('Erreur de connexion PDO : ' . $e->getMessage());
            throw new \RuntimeException('Impossible de se connecter à la base de données.');
        }
    }
}
