<?php
declare(strict_types=1);
require_once BASE_PATH . '/includes/dal/admin_dal.php';

function handle_login_page(): void {
    if (!empty($_SESSION['is_admin'])) {
        header('Location: ' . BASE_URL . '/admin/dashboard');
        exit;
    }
    $page_title = "Connexion Administrateur";
    require_once BASE_PATH . '/templates/pages/login.php';
}

function handle_login_post(PDO $pdo): void {
    require_valid_csrf();
    
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'] ?? '';
    
    if ($username && $password) {
        $admin = get_admin_by_username($pdo, $username);
        
        if ($admin && password_verify($password, $admin['password_hash'])) {
            session_regenerate_id(true); // Prévention fixation de session (Faille de sécurité critique évitée)
            $_SESSION['is_admin'] = true;
            $_SESSION['admin_username'] = $admin['username'];
            
            header('Location: ' . BASE_URL . '/admin/dashboard');
            exit;
        }
    }
    
    $_SESSION['flash_error'] = "Identifiants incorrects.";
    header('Location: ' . BASE_URL . '/login');
    exit;
}

function handle_logout(): void {
    session_destroy();
    header('Location: ' . BASE_URL . '/');
    exit;
}
