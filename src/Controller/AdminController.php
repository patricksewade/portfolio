<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\ViewRenderer;
use App\Http\Request;
use App\Http\Response;
use App\Repository\MessageRepository;
use App\Repository\ProjectRepository;
use App\Service\SecurityService;

/**
 * Contrôleur du tableau de bord administrateur.
 */
final class AdminController
{
    public function __construct(
        private readonly ProjectRepository $projectRepository,
        private readonly MessageRepository $messageRepository,
        private readonly ViewRenderer $viewRenderer,
        private readonly SecurityService $securityService,
    ) {}

    /**
     * Affiche le tableau de bord (dashboard) si l'utilisateur est admin.
     * Redirige vers le login dans le cas contraire.
     */
    public function dashboard(Request $request): Response
    {
        if (!$this->securityService->isAdmin()) {
            return Response::redirect(BASE_URL . '/login');
        }

        $messagesObjects = $this->messageRepository->findAll();
        $projectsObjects = $this->projectRepository->findAll();

        $messages = array_map(fn($m) => $m->toArray(), $messagesObjects);
        $projects = array_map(fn($p) => $p->toArray(), $projectsObjects);

        $totalProjects = count($projects);
        $featuredProjects = count(array_filter($projects, fn($p) => $p['is_featured'] === true));
        $totalMessages = count($messages);
        $unreadMessages = count(array_filter($messages, fn($m) => $m['status'] === 'unread'));

        return $this->viewRenderer->renderResponse('pages/admin_dashboard.php', [
            'page_title'       => 'Tableau de bord - Administration',
            'messages'         => $messages,
            'projects'         => $projects,
            'stats'            => [
                'total_projects'    => $totalProjects,
                'featured_projects' => $featuredProjects,
                'total_messages'    => $totalMessages,
                'unread_messages'   => $unreadMessages,
            ],
            'admin_username'   => $_SESSION['admin_username'] ?? 'Admin',
            'csrf_token'       => $this->securityService->generateCsrfToken(),
        ]);
    }

    /**
     * Marque un message comme lu (action POST).
     */
    public function markMessageRead(Request $request): Response
    {
        if (!$this->securityService->isAdmin()) {
            return Response::redirect(BASE_URL . '/login');
        }

        $id = (int) $request->getBodyParam('message_id');

        if ($id > 0) {
            $this->messageRepository->markAsRead($id);
        }

        return Response::redirect(BASE_URL . '/admin/dashboard');
    }

    /**
     * Consomme un message flash de la session.
     */
    private function consumeFlash(string $key): string
    {
        $message = $_SESSION[$key] ?? '';
        unset($_SESSION[$key]);
        return (string) $message;
    }
}
