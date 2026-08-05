<?php
declare(strict_types=1);

/**
 * Récupère un administrateur par son nom d'utilisateur.
 */
function get_admin_by_username(PDO $pdo, string $username): ?array {
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username LIMIT 1");
    $stmt->execute(['username' => $username]);
    
    $result = $stmt->fetch();
    return $result ?: null;
}
