<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'app_home', methods: ['GET'])]
    public function index(): Response
    {
        return new Response('<html><body><h1>Accueil</h1><p>En construction pour le Jalon 4...</p><a href="/admin/login">Espace Admin</a></body></html>');
    }
}
