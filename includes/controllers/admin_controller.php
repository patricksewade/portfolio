<?php
declare(strict_types=1);
require_once BASE_PATH . '/includes/dal/messages_dal.php';
require_once BASE_PATH . '/includes/dal/projects_dal.php';

function handle_admin_dashboard(PDO $pdo): void {
    require_admin(); // Sécurité : Seul un admin peut accéder à cette page
    
    $messages = get_all_messages($pdo);
    $projects = get_all_projects($pdo);
    
    $page_title = "Dashboard Administrateur";
    require_once BASE_PATH . '/templates/pages/admin_dashboard.php';
}
