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
        // En théorie, sur la page d'accueil on affiche les projets mis en avant,
        // mais l'ancien HomeController affichait tout. 
        // On va afficher les 'featured' ou tous les projets triés par ID.
        $projects = $projectRepository->findBy([], ['id' => 'DESC']);
        
        return $this->render('pages/home.html.twig', [
            'projects' => $projects,
        ]);
    }

    #[Route(path: '/mentions-legales', name: 'app_legal', methods: ['GET'])]
    public function legal(): Response
    {
        return $this->render('pages/mentions-legales.html.twig');
    }
}
