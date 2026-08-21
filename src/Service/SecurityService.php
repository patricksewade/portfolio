<?php

declare(strict_types=1);

namespace App\Service;

/**
 * Service de sécurité : CSRF et vérification d'accès administrateur.
 * Remplace les fonctions procédurales de security_functions.php.
 *
 * Note : Ce service lit directement depuis $_SESSION car la session PHP
 * est un état global géré par le runtime. L'injection de la session
 * ne serait possible qu'avec une abstraction supplémentaire (non nécessaire ici - KISS).
 */
final class SecurityService
{
    /**
     * Échappe une valeur pour l'affichage HTML (protection XSS).
     * Cette fonction globale e() est conservée en tant que méthode statique
     * pour une utilisation pratique dans les vues.
     */
    public static function escape(?string $value): string
    {
        if ($value === null) {
            return '';
        }
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /**
     * Génère un jeton CSRF s'il n'existe pas déjà et le stocke en session.
     */
    public function generateCsrfToken(): string
    {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    /**
     * Vérifie la validité d'un jeton CSRF soumis.
     * Utilise hash_equals pour se prémunir des attaques par timing.
     */
    public function verifyCsrfToken(?string $token): bool
    {
        if (empty($_SESSION['csrf_token']) || empty($token)) {
            return false;
        }
        return hash_equals($_SESSION['csrf_token'], $token);
    }

    /**
     * Vérifie si l'utilisateur courant est authentifié en tant qu'administrateur.
     */
    public function isAdmin(): bool
    {
        return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
    }
}
