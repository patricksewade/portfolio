<?php

declare(strict_types=1);

use App\Service\SecurityService;

if (!function_exists('e')) {
    /**
     * Helper global pour échapper les chaînes dans les vues.
     * Délègue à SecurityService::escape().
     */
    function e(mixed $value): string
    {
        return SecurityService::escape($value);
    }
}

if (!function_exists('generate_csrf_token')) {
    /**
     * Helper pour générer un token CSRF dans les vues (ex: formulaires).
     */
    function generate_csrf_token(): string
    {
        return (new SecurityService())->generateCsrfToken();
    }
}

if (!function_exists('is_admin')) {
    /**
     * Helper pour vérifier le statut admin dans les vues.
     */
    function is_admin(): bool
    {
        return (new SecurityService())->isAdmin();
    }
}
