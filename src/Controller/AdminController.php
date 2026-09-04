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
        MessageRepository $messageRepository,
    ): Response {
        $projects = $projectRepository->findBy([], ['id' => 'DESC']);
        $messages = $messageRepository->findBy([], ['id' => 'DESC']);

        $stats = [
            'total_projects' => $projectRepository->count([]),
            'featured_projects' => $projectRepository->count(['isFeatured' => true]),
            'total_messages' => $messageRepository->count([]),
            'unread_messages' => $messageRepository->count(['status' => 'unread']),
        ];

        /** @var \Symfony\Component\Security\Core\User\UserInterface|null $user */
        $user = $this->getUser();
        $adminUsername = $user ? $user->getUserIdentifier() : 'Admin';

        return $this->render('pages/admin_dashboard.html.twig', [
            'projects' => $projects,
            'messages' => $messages,
            'stats' => $stats,
            'admin_username' => $adminUsername,
        ]);
    }

    #[Route(path: '/message/read', name: 'app_admin_message_read', methods: ['POST'])]
    public function markMessageAsRead(
        \Symfony\Component\HttpFoundation\Request $request,
        MessageRepository $messageRepository,
        \Doctrine\ORM\EntityManagerInterface $em,
    ): Response {
        if (!$this->isCsrfTokenValid('message_read', (string) $request->request->get('csrf_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('app_admin_dashboard');
        }

        $id = $request->request->get('message_id');
        $message = $messageRepository->find((int) $id);

        if ($message) {
            $message->setStatus('read');
            $em->flush();
            $this->addFlash('success', 'Message marqué comme lu.');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }
}
