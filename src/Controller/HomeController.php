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

        $profileSummary = "Fort de 9 années d'expérience en développement PHP et certifié Architecte Digital (Bac+5), je conçois des solutions web performantes et scalables. J'allie une maîtrise de la programmation orientée objet (POO) et de la conception de systèmes complexes (ERP), avec une spécialisation actuelle sur l'écosystème Symfony 7+.";

        $skills = [
            'Langages' => ['PHP 8+ (POO, typage strict)', 'SQL'],
            'Framework & Architecture' => ['Symfony 7+', 'API Platform', 'MVC', 'APIs RESTful'],
            'Données & ORM' => ['MySQL / MariaDB', 'PostgreSQL', 'Doctrine ORM', 'Modélisation de données (MCD/MLD)'],
            'Qualité & Sécurité' => ['PHPUnit', 'PHPStan', 'PHP-CS-Fixer', 'Rector', 'Conventions PSR-12 / PER-CS', 'Principes SOLID', 'Clean Code'],
            'Outils & Environnement' => ['Composer', 'Git', 'Docker', 'Docker Compose', 'WSL2', 'Intégration continue', 'Xdebug', 'Symfony Profiler'],
            'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'Twig', 'Tailwind CSS'],
            'Méthodologies' => ['Agile (Scrum)', 'Revue de code'],
        ];

        $experiences = [
            [
                'title' => 'Développeur Web PHP & Architecte Freelance',
                'company' => 'Freelance',
                'period' => 'Sept. 2020 – Août 2024 (4 ans)',
                'location' => 'Cotonou, Bénin',
                'description' => "Accompagnement technique et stratégique de bout en bout avec un respect strict des délais de livraison sur plus de 10 projets.\n• Conseil & Architecture : Traduction précise des besoins métiers complexes en spécifications techniques et architectures logicielles.\n• Développement & Modélisation : Conception de bases de données (MCD), refonte applicative et implémentation de fonctionnalités métiers sur-mesure.",
                'stack' => 'PHP (POO), MySQL, API REST, JavaScript.',
            ],
            [
                'title' => 'Responsable Technique / Développeur PHP',
                'company' => 'LogiSoft Solutions/ MAPCOM Technologies',
                'period' => 'Août 2015 – Août 2020 (5 ans)',
                'location' => 'Cotonou, Bénin',
                'description' => "Pilotage technique des développements et garantie de la qualité logicielle au sein d'un écosystème ERP.\n• Management & Qualité : Mentorat d'une équipe de 2 développeurs, animation de revues de code (Code Reviews) et arbitrage technique.\n• Fiabilisation : Réalisation d'audits de code approfondis ayant permis une réduction de 50% des bugs applicatifs.\n• Développement métier : Conception et intégration de modules complexes pour l'ERP interne.",
                'stack' => 'PHP (POO), Dolibarr, MySQL, Git, JavaScript.',
            ],
            [
                'title' => 'Stage Développeur Web',
                'company' => 'Educafinance / Service FinanceTesEtudes.com',
                'period' => 'Jan. 2014 – Août 2014 (8 mois)',
                'location' => 'Paris, France',
                'description' => 'Refactoring et optimisation du logiciel interne de traitement et de validation des opérations de courtage bancaire.',
                'stack' => 'PHP, MySQL, MVC, JavaScript, WordPress',
            ],
            [
                'title' => 'Stage Développeur Web PHP',
                'company' => 'Altelis (ex Eficom)',
                'period' => 'Avril 2013 – Juillet 2013 (4 mois)',
                'location' => 'Paris - La Défense',
                'description' => 'Intégration de modules dynamiques et de passerelles de réservation sur des plateformes hôtelières.',
                'stack' => 'CakePHP, MySQL, jQuery',
            ],
        ];

        $educations = [
            [
                'degree' => 'Architecte Digital (Bac+5)',
                'specialty' => 'Expert en Stratégie et Transformation Digitale (Titre RNCP Niveau 7)',
                'school' => 'Digital School of Paris (DSP)',
                'location' => 'Vincennes, France',
                'period' => 'Oct. 2024 - Jan. 2026',
            ],
            [
                'degree' => 'DEESWEB (Bac+3)',
                'specialty' => 'Diplôme Européen d\'Études Supérieures en Webmaster',
                'school' => 'OiiO Formation',
                'location' => 'Paris, France',
                'period' => 'Oct. 2013 - Juil. 2014',
            ],
            [
                'degree' => 'DUT SRC (Bac+2)',
                'specialty' => 'Services et Réseaux de Communication',
                'school' => 'IUT de Cergy-Pontoise',
                'location' => 'Cergy-Pontoise, France',
                'period' => 'Sept. 2011 - Juin 2013',
            ],
        ];

        $certifications = [
            [
                'title' => 'PHP (8.5)',
                'issuer' => 'Dyma',
                'duration' => '32 heures',
                'date' => '24 mai 2026',
                'icon' => 'php',
                'url' => 'docs/certifications/Certificat_PHP_Dyma.pdf',
            ],
            [
                'title' => 'Git (2.51)',
                'issuer' => 'Dyma',
                'duration' => '9 heures',
                'date' => '11 juin 2026',
                'icon' => 'git',
                'url' => 'docs/certifications/Certificat_Git_Dyma.pdf',
            ],
            [
                'title' => 'HTML & CSS (5 / 3)',
                'issuer' => 'Dyma',
                'duration' => '46 heures',
                'date' => '26 mai 2026',
                'icon' => 'html5',
                'url' => 'docs/certifications/Certificat_HTML_CSS_Dyma.pdf',
            ],
        ];

        return $this->render('pages/home.html.twig', [
            'page_title' => "Portfolio d'Ernest Patrick SEWADE | Développeur Web Backend PHP / Symfony",
            'projects' => $projects,
            'projectCount' => \count($projects),
            'profile_summary' => $profileSummary,
            'skills' => $skills,
            'experiences' => $experiences,
            'educations' => $educations,
            'certifications' => $certifications,
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
