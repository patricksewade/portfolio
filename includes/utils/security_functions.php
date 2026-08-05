<?php
declare(strict_types=1);

/**
 * Fonction globale d'échappement XSS.
 * TOUTE variable affichée dans les templates doit être passée dans cette fonction.
 */
function e(?string $value): string {
    if ($value === null) {
        return '';
    }
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Génère un jeton CSRF et le stocke en session.
 */
function generate_csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        try {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        } catch (\Exception $e) {
            // Fallback si random_bytes échoue (très rare)
            $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(32));
        }
    }
    return $_SESSION['csrf_token'];
}

/**
 * Vérifie la validité d'un jeton CSRF soumis.
 */
function verify_csrf_token(?string $token): bool {
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Vérifie si le formulaire actuel a été soumis avec un CSRF valide.
 * Si ce n'est pas le cas, bloque l'exécution immédiatement.
 */
function require_valid_csrf(): void {
    $token = $_POST['csrf_token'] ?? null;
    if (!verify_csrf_token($token)) {
        http_response_code(403);
        die('Erreur de sécurité : Jeton CSRF invalide, manquant ou expiré.');
    }
}

/**
 * Vérifie si l'utilisateur est authentifié comme administrateur.
 * Si ce n'est pas le cas, redirige vers la page de login.
 */
function require_admin(): void {
    if (empty($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
        header('Location: ' . BASE_URL . '/login');
        exit;
    }
}
