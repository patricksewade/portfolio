<?php
declare(strict_types=1);
require_once BASE_PATH . '/includes/dal/projects_dal.php';

function handle_home_page(PDO $pdo): void {
    $projects = get_all_projects($pdo);
    
    // On passe les variables à la vue
    $page_title = "Accueil | Portfolio E. P. SEWADE";
    require_once BASE_PATH . '/templates/pages/home.php';
}
