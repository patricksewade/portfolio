<?php
declare(strict_types=1);
require_once BASE_PATH . '/includes/dal/projects_dal.php';

function handle_home_page(PDO $pdo): void {
    $db_projects = get_all_projects($pdo);
    
    // Nouveaux projets statiques (placeholders)
    $new_projects = [
        [
            'is_featured' => 1,
            'title' => 'KLG-Caisse',
            'description' => 'Logiciel de caisse qui va à l\'essentiel. Migration complète d\'une application de caisse vers une architecture POO.',
            'tech_stack' => 'PHP 8, Symfony',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ],
        [
            'is_featured' => 0,
            'title' => 'PROMADE',
            'description' => 'Description et fonctionnalités à venir pour le projet PROMADE.',
            'tech_stack' => 'À définir',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ],
        [
            'is_featured' => 0,
            'title' => 'MAPCOM Solutions Informatiques',
            'description' => 'Projet et réalisations techniques au sein de MAPCOM.',
            'tech_stack' => 'À définir',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ],
        [
            'is_featured' => 0,
            'title' => 'MAHUTON SMART GROUP',
            'description' => 'Our expertise at your service. Description des livrables.',
            'tech_stack' => 'À définir',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ],
        [
            'is_featured' => 0,
            'title' => 'Santé Maternité & Enfance',
            'description' => 'Plateforme ou solution dédiée à l\'accompagnement et la santé mère-enfant.',
            'tech_stack' => 'À définir',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ],
        [
            'is_featured' => 0,
            'title' => 'EITP',
            'description' => 'École d\'Initiation Théologique et Pastorale. Création du portail.',
            'tech_stack' => 'À définir',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ],
        [
            'is_featured' => 0,
            'title' => '2SND Technologies',
            'description' => 'Solutions et développement pour 2SND Technologies.',
            'tech_stack' => 'À définir',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ],
        [
            'is_featured' => 0,
            'title' => 'RGPH5-BÉNIN',
            'description' => 'Recensement Général de la Population et de l\'Habitation : "Je compte pour l\'avenir".',
            'tech_stack' => 'À définir',
            'github_url' => '',
            'live_demo_url' => '',
            'image_url' => ''
        ]
    ];
    
    $projects = array_merge($new_projects, $db_projects);
    
    // Données du Profil (CV)
    $profile_summary = "Diplômé d'un Master 2 Architecte Digital et fort de 9 ans de pratique PHP (architecture POO, bases de données, ERP, bonnes pratiques modernes), j'applique aujourd'hui ces compétences fondamentales à l'écosystème Symfony. Autonome et rigoureux, je souhaite m'investir pleinement dans le développement, l'optimisation et la pérennisation de vos applications web.";
    
    $skills = [
        'Langages' => ['PHP 8+ (POO, typage strict)', 'SQL'],
        'Framework & Architecture' => ['Symfony 7+', 'MVC', 'API RESTful'],
        'Données & ORM' => ['MySQL / MariaDB', 'Doctrine ORM'],
        'Qualité & Sécurité' => ['PHPUnit', 'PHPStan', 'PSR/PER', 'SOLID', 'Clean Code'],
        'Outils & Environnement' => ['Composer', 'Git', 'Docker', 'WSL2'],
        'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'Twig', 'Tailwind CSS'],
        'Méthodologies' => ['Agile (Scrum)', 'Revue de code']
    ];
    
    $experiences = [
        [
            'title' => 'Équipier polyvalent',
            'company' => 'McDonald\'s',
            'period' => 'Nov. 2024 – Présent',
            'location' => 'France',
            'description' => 'Emploi alimentaire en parallèle de mes études. Travail à flux tendu, rigueur, gestion du stress et excellente dynamique d\'équipe.',
            'stack' => ''
        ],
        [
            'title' => 'Développeur Web PHP (Freelance)',
            'company' => 'Freelance',
            'period' => 'Sept. 2020 – Août 2024 (4 ans)',
            'location' => 'Cotonou, Bénin',
            'description' => 'Analyse des besoins, modélisation de données, développement et restructuration technique globale.',
            'stack' => 'PHP, MySQL, JavaScript, APIs RESTful, WordPress'
        ],
        [
            'title' => 'Développeur PHP Fullstack / Responsable Technique',
            'company' => 'Logisoft Solutions / MAPCOM Technologies',
            'period' => 'Août 2015 – Août 2020 (5 ans)',
            'location' => 'Cotonou, Bénin',
            'description' => 'Encadrement de l\'équipe technique. Développement de modules pour ERP, audit de code et sécurisation applicative.',
            'stack' => 'PHP (POO), MySQL, Git, JavaScript, APIs, Sécurité'
        ],
        [
            'title' => 'Stage Développeur Web',
            'company' => 'Educafinance / Service FinanceTesEtudes.com',
            'period' => 'Jan. 2014 – Août 2014 (8 mois)',
            'location' => 'Paris, France',
            'description' => 'Refactoring et optimisation du logiciel interne de traitement et de validation des opérations de courtage bancaire.',
            'stack' => 'PHP, MySQL, MVC, JavaScript, WordPress'
        ],
        [
            'title' => 'Stage Développeur Web PHP',
            'company' => 'Altelis (ex Eficom)',
            'period' => 'Avril 2013 – Juillet 2013 (4 mois)',
            'location' => 'Paris - La Défense',
            'description' => 'Intégration de modules dynamiques et de passerelles de réservation sur des plateformes hôtelières.',
            'stack' => 'CakePHP, MySQL, jQuery'
        ]
    ];
    
    $educations = [
        [
            'degree' => 'Master 2 Architecte Digital / Web (Bac+5)',
            'specialty' => 'Expert en Stratégie et Transformation Digitale (RNCP Niveau 7)',
            'school' => 'Digital School of Paris (DSP)',
            'location' => 'Vincennes, France',
            'period' => 'Oct. 2024 - Déc. 2025'
        ],
        [
            'degree' => 'DEESWEB (Bac+3)',
            'specialty' => 'Diplôme Européen d’Études Supérieures en Webmaster',
            'school' => 'OiiO Formation',
            'location' => 'Paris, France',
            'period' => 'Oct. 2013 - Juil. 2014'
        ],
        [
            'degree' => 'DUT SRC (Bac+2)',
            'specialty' => 'Services et Réseaux de Communication',
            'school' => 'IUT de Cergy-Pontoise',
            'location' => 'Cergy-Pontoise, France',
            'period' => 'Sept. 2011 - Juin 2013'
        ]
    ];

    // On passe les variables à la vue
    $page_title = "Ernest Patrick SEWADE | Développeur Web PHP / Symfony";
    require_once BASE_PATH . '/templates/pages/home.php';
}

/**
 * Gère l'affichage de la page des Mentions Légales.
 */
function handle_mentions_legales(): void {
    require_once BASE_PATH . '/templates/pages/mentions-legales.php';
}
