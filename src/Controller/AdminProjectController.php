<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\ViewRenderer;
use App\Http\Request;
use App\Http\Response;
use App\Model\Project;
use App\Repository\ProjectRepository;
use App\Service\SecurityService;
use Bulletproof\Image;

/**
 * Contrôleur pour la gestion des projets dans l'administration.
 */
final class AdminProjectController
{
    public function __construct(
        private readonly ProjectRepository $projectRepository,
        private readonly ViewRenderer $viewRenderer,
        private readonly SecurityService $securityService,
    ) {}

    /**
     * Affiche le formulaire d'ajout et traite la soumission.
     */
    public function create(Request $request): Response
    {
        if (!$this->securityService->isAdmin()) {
            return Response::redirect(BASE_URL . '/login');
        }

        $errors = [];
        $projectData = [
            'title' => '',
            'description' => '',
            'tech_stack' => '',
            'github_url' => '',
            'live_demo_url' => '',
            'is_featured' => false,
            'image_url' => '',
        ];

        if ($request->isPost()) {
            if (!$this->securityService->verifyCsrfToken($request->getBodyParam('csrf_token'))) {
                $errors[] = "Jeton de sécurité invalide.";
            } else {
                $projectData = [
                    'title' => trim($request->getBodyParam('title')),
                    'description' => trim($request->getBodyParam('description')),
                    'tech_stack' => trim($request->getBodyParam('tech_stack')),
                    'github_url' => trim($request->getBodyParam('github_url')),
                    'live_demo_url' => trim($request->getBodyParam('live_demo_url')),
                    'is_featured' => (bool)$request->getBodyParam('is_featured'),
                    'image_url' => '', 
                ];

                if (empty($projectData['title'])) {
                    $errors[] = "Le titre est obligatoire.";
                }
                if (empty($projectData['description'])) {
                    $errors[] = "La description est obligatoire.";
                }

                if (empty($errors)) {
                    try {
                        $imageUrl = $this->handleImageUpload($request->getFiles());
                        if ($imageUrl !== null) {
                            $projectData['image_url'] = $imageUrl;
                        }
                    } catch (\Exception $e) {
                        $errors[] = $e->getMessage();
                    }

                    if (empty($errors)) {
                        $project = new Project(
                            id: 0,
                            title: $projectData['title'],
                            description: $projectData['description'],
                            techStack: $projectData['tech_stack'],
                            isFeatured: $projectData['is_featured'],
                            githubUrl: $projectData['github_url'],
                            liveDemoUrl: $projectData['live_demo_url'],
                            imageUrl: $projectData['image_url'],
                            createdAt: new \DateTimeImmutable()
                        );

                        $this->projectRepository->insert($project);
                        $_SESSION['flash_success'] = "Le projet a été créé avec succès.";
                        return Response::redirect(BASE_URL . '/admin/dashboard');
                    }
                }
            }
        }

        return $this->viewRenderer->renderResponse('pages/admin_project_form.php', [
            'page_title' => 'Ajouter un projet',
            'project' => $projectData,
            'errors' => $errors,
            'csrf_token' => $this->securityService->generateCsrfToken(),
            'action_url' => BASE_URL . '/admin/projects/create',
        ]);
    }

    /**
     * Affiche le formulaire de modification et traite la soumission.
     */
    public function edit(Request $request): Response
    {
        if (!$this->securityService->isAdmin()) {
            return Response::redirect(BASE_URL . '/login');
        }

        $id = (int)($request->isPost() ? $request->getBodyParam('id') : $request->getQueryParam('id', '0'));
        $project = $this->projectRepository->findById($id);

        if ($project === null) {
            $_SESSION['flash_error'] = "Projet introuvable.";
            return Response::redirect(BASE_URL . '/admin/dashboard');
        }

        $errors = [];
        $projectData = [
            'id' => $project->getId(),
            'title' => $project->getTitle(),
            'description' => $project->getDescription(),
            'tech_stack' => $project->getTechStack(),
            'github_url' => $project->getGithubUrl(),
            'live_demo_url' => $project->getLiveDemoUrl(),
            'is_featured' => $project->isFeatured(),
            'image_url' => $project->getImageUrl(),
        ];

        if ($request->isPost()) {
            if (!$this->securityService->verifyCsrfToken($request->getBodyParam('csrf_token'))) {
                $errors[] = "Jeton de sécurité invalide.";
            } else {
                $projectData['title'] = trim($request->getBodyParam('title'));
                $projectData['description'] = trim($request->getBodyParam('description'));
                $projectData['tech_stack'] = trim($request->getBodyParam('tech_stack'));
                $projectData['github_url'] = trim($request->getBodyParam('github_url'));
                $projectData['live_demo_url'] = trim($request->getBodyParam('live_demo_url'));
                $projectData['is_featured'] = (bool)$request->getBodyParam('is_featured');

                if (empty($projectData['title'])) {
                    $errors[] = "Le titre est obligatoire.";
                }
                if (empty($projectData['description'])) {
                    $errors[] = "La description est obligatoire.";
                }

                if (empty($errors)) {
                    $removeImage = (bool)$request->getBodyParam('remove_image');

                    try {
                        $imageUrl = $this->handleImageUpload($request->getFiles());
                        if ($imageUrl !== null) {
                            // Suppression de l'ancienne image si elle existe
                            if (!empty($project->getImageUrl())) {
                                $oldPath = BASE_PATH . '/public' . $project->getImageUrl();
                                if (file_exists($oldPath) && is_file($oldPath)) {
                                    unlink($oldPath);
                                }
                            }
                            $projectData['image_url'] = $imageUrl;
                        } elseif ($removeImage) {
                            // Suppression physique de l'image demandée
                            if (!empty($project->getImageUrl())) {
                                $oldPath = BASE_PATH . '/public' . $project->getImageUrl();
                                if (file_exists($oldPath) && is_file($oldPath)) {
                                    unlink($oldPath);
                                }
                            }
                            $projectData['image_url'] = '';
                        }
                    } catch (\Exception $e) {
                        $errors[] = $e->getMessage();
                    }

                    if (empty($errors)) {
                        $updatedProject = new Project(
                            id: $project->getId(),
                            title: $projectData['title'],
                            description: $projectData['description'],
                            techStack: $projectData['tech_stack'],
                            isFeatured: $projectData['is_featured'],
                            githubUrl: $projectData['github_url'],
                            liveDemoUrl: $projectData['live_demo_url'],
                            imageUrl: $projectData['image_url'],
                            createdAt: $project->getCreatedAt()
                        );

                        $this->projectRepository->update($updatedProject);
                        $_SESSION['flash_success'] = "Le projet a été modifié avec succès.";
                        return Response::redirect(BASE_URL . '/admin/dashboard');
                    }
                }
            }
        }

        return $this->viewRenderer->renderResponse('pages/admin_project_form.php', [
            'page_title' => 'Modifier le projet',
            'project' => $projectData,
            'errors' => $errors,
            'csrf_token' => $this->securityService->generateCsrfToken(),
            'action_url' => BASE_URL . '/admin/projects/edit',
        ]);
    }

    /**
     * Supprime un projet.
     */
    public function delete(Request $request): Response
    {
        if (!$this->securityService->isAdmin()) {
            return Response::redirect(BASE_URL . '/login');
        }

        if ($request->isPost()) {
            if (!$this->securityService->verifyCsrfToken($request->getBodyParam('csrf_token'))) {
                $_SESSION['flash_error'] = "Jeton de sécurité invalide.";
            } else {
                $id = (int)$request->getBodyParam('id');
                if ($id > 0) {
                    $project = $this->projectRepository->findById($id);
                    if ($project !== null) {
                        // Suppression physique de l'image si elle existe
                        if (!empty($project->getImageUrl())) {
                            $oldPath = BASE_PATH . '/public' . $project->getImageUrl();
                            if (file_exists($oldPath) && is_file($oldPath)) {
                                unlink($oldPath);
                            }
                        }
                        
                        $this->projectRepository->delete($id);
                        $_SESSION['flash_success'] = "Le projet a été supprimé.";
                    }
                }
            }
        }

        return Response::redirect(BASE_URL . '/admin/dashboard');
    }

    /**
     * Gère l'upload de l'image du projet avec bulletproof.
     * Retourne l'URL de l'image (chemin relatif) ou null si aucun upload.
     */
    private function handleImageUpload(array $files): ?string
    {
        if (empty($files) || !isset($files['image']) || $files['image']['error'] === UPLOAD_ERR_NO_FILE) {
            return null;
        }

        $image = new Image($files);
        $image->setName(uniqid('proj_'));
        $image->setMime(array('jpeg', 'jpg', 'png', 'gif', 'webp'));
        $image->setSize(100, 2097152); // Min 100 octets, Max 2 Mo
        $image->setStorage(BASE_PATH . '/public/assets/images/projects', 0755);
        
        if (!is_dir($image->getStorage())) {
            mkdir($image->getStorage(), 0755, true);
        }

        if ($image['image']) {
            $upload = $image->upload();
            if ($upload) {
                return '/assets/images/projects/' . $image->getName() . '.' . $image->getMime();
            } else {
                throw new \Exception($image->getError());
            }
        }

        return null;
    }
}
