<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
final class AdminController extends AbstractController
{
    #[Route(path: '/admin', name: 'app_admin_dashboard', methods: ['GET'])]
    public function index(): Response
    {
        return new Response('<html><body><h1>Tableau de bord Administrateur</h1><p>En construction pour le Jalon 4...</p><a href="/admin/logout">Se déconnecter</a></body></html>');
    }
}
