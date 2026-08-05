<?php
declare(strict_types=1);

/**
 * Dispatche la requête HTTP vers la fonction contrôleur correspondante.
 * Gère également les erreurs 404, 405 et 500 de manière procédurale.
 */
function dispatch_request(string $uri, string $method, PDO $pdo): void {
    // Nettoyage basique de l'URI (retirer les query strings si présentes)
    $uri = explode('?', $uri)[0];
    
    try {
        match ($uri) {
            '/' => match ($method) {
                'GET' => call_controller('home_controller.php', 'handle_home_page', [$pdo]),
                default => http_error(405)
            },
            '/mentions-legales' => match ($method) {
                'GET' => call_controller('home_controller.php', 'handle_mentions_legales', []),
                default => http_error(405)
            },
            '/contact' => match ($method) {
                'GET' => call_controller('contact_controller.php', 'handle_contact_page', []),
                'POST' => call_controller('contact_controller.php', 'handle_contact_post', [$pdo]),
                default => http_error(405)
            },
            '/login' => match ($method) {
                'GET' => call_controller('auth_controller.php', 'handle_login_page', []),
                'POST' => call_controller('auth_controller.php', 'handle_login_post', [$pdo]),
                default => http_error(405)
            },
            '/logout' => match ($method) {
                'GET', 'POST' => call_controller('auth_controller.php', 'handle_logout', []),
                default => http_error(405)
            },
            '/admin/dashboard' => match ($method) {
                'GET' => call_controller('admin_controller.php', 'handle_admin_dashboard', [$pdo]),
                default => http_error(405)
            },
            default => http_error(404)
        };
    } catch (\Throwable $e) {
        // Capture globale des exceptions (Erreur 500)
        error_log('Erreur fatale non interceptée : ' . $e->getMessage() . ' dans ' . $e->getFile() . ' à la ligne ' . $e->getLine());
        http_error(500);
    }
}

/**
 * Fonction d'assistance pour inclure le contrôleur et appeler sa fonction.
 */
function call_controller(string $file, string $function, array $args): void {
    $path = BASE_PATH . '/includes/controllers/' . $file;
    if (!file_exists($path)) {
        throw new \Exception("Le contrôleur {$file} est introuvable.");
    }
    require_once $path;
    
    if (!function_exists($function)) {
        throw new \Exception("La fonction {$function} est introuvable dans {$file}.");
    }
    
    // Appel dynamique de la fonction avec ses arguments
    $function(...$args);
}

/**
 * Gère l'affichage des pages d'erreur HTTP.
 */
function http_error(int $code): void {
    http_response_code($code);
    
    $view_path = BASE_PATH . "/templates/pages/{$code}.php";
    if (file_exists($view_path)) {
        require_once $view_path;
    } else {
        echo "<div style='font-family:sans-serif; text-align:center; padding-top:50px;'>";
        echo "<h1>Erreur {$code}</h1>";
        if ($code === 404) echo "<p>La page demandée est introuvable.</p>";
        if ($code === 405) echo "<p>La méthode HTTP n'est pas autorisée pour cette route.</p>";
        if ($code === 500) echo "<p>Une erreur interne du serveur s'est produite. Veuillez réessayer plus tard.</p>";
        echo "</div>";
    }
    exit;
}
