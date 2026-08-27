<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\MessageRepository;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin')]
final class AdminController extends AbstractController
{
    #[Route(path: '/dashboard', name: 'app_admin_dashboard', methods: ['GET'])]
    public function dashboard(
        ProjectRepository $projectRepository,
        MessageRepository $messageRepository
    ): Response {
        $projects = $projectRepository->findBy([], ['id' => 'DESC']);
        $messages = $messageRepository->findBy([], ['id' => 'DESC']);

        return $this->render('pages/admin_dashboard.html.twig', [
            'projects' => $projects,
            'messages' => $messages,
        ]);
    }
}
