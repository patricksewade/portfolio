<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Admin;

/**
 * Accès aux données de la table `admin`.
 * Remplace les fonctions procédurales de admin_dal.php.
 */
final class AdminRepository
{
    public function __construct(
        private readonly \PDO $pdo,
    ) {}

    /**
     * Recherche un administrateur par son nom d'utilisateur.
     */
    public function findByUsername(string $username): ?Admin
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM admin WHERE username = :username LIMIT 1'
        );
        $stmt->execute(['username' => $username]);

        $row = $stmt->fetch();
        return $row !== false ? Admin::fromArray($row) : null;
    }
}
