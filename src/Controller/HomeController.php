<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'app_home', methods: ['GET'])]
    public function index(ProjectRepository $projectRepository): Response
    {
        $projects = $projectRepository->findBy([], ['isFeatured' => 'DESC', 'id' => 'DESC']);

        $profileSummary = "Diplômé d'un Master 2 Architecte Digital et fort de 9 ans de pratique PHP (architecture POO, bases de données, ERP, bonnes pratiques modernes), j'applique aujourd'hui ces compétences fondamentales à l'écosystème Symfony. Autonome et rigoureux, je souhaite m'investir pleinement dans le développement, l'optimisation et la pérennisation de vos applications web.";

        $skills = [
            'Langages'                    => ['PHP 8+ (POO, typage strict)', 'SQL'],
            'Framework & Architecture'    => ['Symfony 7+', 'MVC', 'API RESTful'],
            'Données & ORM'               => ['MySQL / MariaDB', 'Doctrine ORM'],
            'Qualité & Sécurité'          => ['PHPUnit', 'PHPStan', 'PSR/PER', 'SOLID', 'Clean Code'],
            'Outils & Environnement'      => ['Composer', 'Git', 'Docker', 'WSL2'],
            'Frontend'                    => ['HTML5', 'CSS3', 'JavaScript', 'Twig', 'Tailwind CSS'],
            'Méthodologies'               => ['Agile (Scrum)', 'Revue de code'],
        ];

        $experiences = [
            [
                'title'       => 'Équipier polyvalent',
                'company'     => "McDonald's",
                'period'      => 'Nov. 2024 – Présent',
                'location'    => 'France',
                'description' => "Emploi alimentaire en parallèle de mes études. Travail à flux tendu, rigueur, gestion du stress et excellente dynamique d'équipe.",
                'stack'       => '',
            ],
            [
                'title'       => 'Développeur Web PHP (Freelance)',
                'company'     => 'Freelance',
                'period'      => 'Sept. 2020 – Août 2024 (4 ans)',
                'location'    => 'Cotonou, Bénin',
                'description' => 'Analyse des besoins, modélisation de données, développement et restructuration technique globale.',
                'stack'       => 'PHP, MySQL, JavaScript, APIs RESTful, WordPress',
            ],
            [
                'title'       => 'Développeur PHP Fullstack / Responsable Technique',
                'company'     => 'Logisoft Solutions / MAPCOM Technologies',
                'period'      => 'Août 2015 – Août 2020 (5 ans)',
                'location'    => 'Cotonou, Bénin',
                'description' => "Encadrement de l'équipe technique. Développement de modules pour ERP, audit de code et sécurisation applicative.",
                'stack'       => 'PHP (POO), MySQL, Git, JavaScript, APIs, Sécurité',
            ],
            [
                'title'       => 'Stage Développeur Web',
                'company'     => 'Educafinance / Service FinanceTesEtudes.com',
                'period'      => 'Jan. 2014 – Août 2014 (8 mois)',
                'location'    => 'Paris, France',
                'description' => 'Refactoring et optimisation du logiciel interne de traitement et de validation des opérations de courtage bancaire.',
                'stack'       => 'PHP, MySQL, MVC, JavaScript, WordPress',
            ],
            [
                'title'       => 'Stage Développeur Web PHP',
                'company'     => 'Altelis (ex Eficom)',
                'period'      => 'Avril 2013 – Juillet 2013 (4 mois)',
                'location'    => 'Paris - La Défense',
                'description' => 'Intégration de modules dynamiques et de passerelles de réservation sur des plateformes hôtelières.',
                'stack'       => 'CakePHP, MySQL, jQuery',
            ],
        ];

        $educations = [
            [
                'degree'    => 'Master 2 Architecte Digital / Web (Bac+5)',
                'specialty' => 'Expert en Stratégie et Transformation Digitale (RNCP Niveau 7)',
                'school'    => 'Digital School of Paris (DSP)',
                'location'  => 'Vincennes, France',
                'period'    => 'Oct. 2024 - Déc. 2025',
            ],
            [
                'degree'    => 'DEESWEB (Bac+3)',
                'specialty' => 'Diplôme Européen d\'Études Supérieures en Webmaster',
                'school'    => 'OiiO Formation',
                'location'  => 'Paris, France',
                'period'    => 'Oct. 2013 - Juil. 2014',
            ],
            [
                'degree'    => 'DUT SRC (Bac+2)',
                'specialty' => 'Services et Réseaux de Communication',
                'school'    => 'IUT de Cergy-Pontoise',
                'location'  => 'Cergy-Pontoise, France',
                'period'    => 'Sept. 2011 - Juin 2013',
            ],
        ];

        $certifications = [
            [
                'title'    => 'PHP (8.5)',
                'issuer'   => 'Dyma',
                'duration' => '32 heures',
                'date'     => '24 mai 2026',
                'icon'     => 'php',
            ],
            [
                'title'    => 'HTML & CSS (5 / 3)',
                'issuer'   => 'Dyma',
                'duration' => '46 heures',
                'date'     => '26 mai 2026',
                'icon'     => 'html5',
            ],
            [
                'title'    => 'Git (2.51)',
                'issuer'   => 'Dyma',
                'duration' => '9 heures',
                'date'     => '11 juin 2026',
                'icon'     => 'git',
            ],
        ];
        
        return $this->render('pages/home.html.twig', [
            'page_title'      => "Portfolio d'Ernest Patrick SEWADE | Développeur Web Backend PHP / Symfony",
            'projects'        => $projects,
            'projectCount'    => count($projects),
            'profile_summary' => $profileSummary,
            'skills'          => $skills,
            'experiences'     => $experiences,
            'educations'      => $educations,
            'certifications'  => $certifications,
        ]);
    }

    #[Route(path: '/mentions-legales', name: 'app_legal', methods: ['GET'])]
    public function legal(): Response
    {
        return $this->render('pages/mentions-legales.html.twig', [
            'page_title' => 'Mentions Légales',
        ]);
    }
}
