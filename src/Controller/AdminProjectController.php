<?php

declare(strict_types=1);

namespace App\Controller;

use App\Dto\ProjectDto;
use App\Entity\Project;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/projects')]
final class AdminProjectController extends AbstractController
{
    #[Route('/create', name: 'app_admin_project_create', methods: ['GET', 'POST'])]
    public function create(
        Request $request,
        ValidatorInterface $validator,
        EntityManagerInterface $em,
    ): Response {
        $dto = new ProjectDto();

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('project_form', $request->request->get('csrf_token'))) {
                $this->addFlash('error', 'Jeton de sécurité invalide.');

                return $this->redirectToRoute('app_admin_dashboard');
            }

            $dto->title = trim((string) $request->request->get('title'));
            $dto->description = trim((string) $request->request->get('description'));
            $dto->techStack = trim((string) $request->request->get('tech_stack'));
            $dto->githubUrl = trim((string) $request->request->get('github_url')) ?: null;
            $dto->liveDemoUrl = trim((string) $request->request->get('live_demo_url')) ?: null;
            $dto->isFeatured = (bool) $request->request->get('is_featured');
            $dto->image = $request->files->get('image');

            $errors = $validator->validate($dto);

            if (\count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $project = new Project();
                $project->setTitle($dto->title);
                $project->setDescription($dto->description);
                $project->setTechStack($dto->techStack);
                $project->setGithubUrl($dto->githubUrl);
                $project->setLiveDemoUrl($dto->liveDemoUrl);
                $project->setIsFeatured($dto->isFeatured);
                $project->setCreatedAt(new \DateTimeImmutable());

                if ($dto->image) {
                    $imageUrl = $this->handleImageUpload($dto->image);
                    $project->setImageUrl($imageUrl);
                }

                $em->persist($project);
                $em->flush();

                $this->addFlash('success', 'Le projet a été ajouté avec succès.');

                return $this->redirectToRoute('app_admin_dashboard');
            }
        }

        return $this->render('pages/admin_project_form.html.twig', [
            'page_title' => 'Ajouter un projet',
            'project' => $dto,
            'action_url' => $this->generateUrl('app_admin_project_create'),
        ]);
    }

    #[Route('/edit/{id}', name: 'app_admin_project_edit', methods: ['GET', 'POST'])]
    public function edit(
        int $id,
        Request $request,
        ProjectRepository $projectRepository,
        ValidatorInterface $validator,
        EntityManagerInterface $em,
    ): Response {
        $project = $projectRepository->find($id);

        if (!$project) {
            $this->addFlash('error', 'Projet introuvable.');

            return $this->redirectToRoute('app_admin_dashboard');
        }

        $dto = new ProjectDto();
        $dto->title = $project->getTitle() ?? '';
        $dto->description = $project->getDescription() ?? '';
        $dto->techStack = $project->getTechStack() ?? '';
        $dto->githubUrl = $project->getGithubUrl();
        $dto->liveDemoUrl = $project->getLiveDemoUrl();
        $dto->isFeatured = $project->isFeatured() ?? false;
        // L'image existante est stockée dans l'entité, le DTO gère le nouvel upload

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('project_form', $request->request->get('csrf_token'))) {
                $this->addFlash('error', 'Jeton de sécurité invalide.');

                return $this->redirectToRoute('app_admin_dashboard');
            }

            $dto->title = trim((string) $request->request->get('title'));
            $dto->description = trim((string) $request->request->get('description'));
            $dto->techStack = trim((string) $request->request->get('tech_stack'));
            $dto->githubUrl = trim((string) $request->request->get('github_url')) ?: null;
            $dto->liveDemoUrl = trim((string) $request->request->get('live_demo_url')) ?: null;
            $dto->isFeatured = (bool) $request->request->get('is_featured');
            $dto->image = $request->files->get('image');
            $removeImage = (bool) $request->request->get('remove_image');

            $errors = $validator->validate($dto);

            if (\count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $project->setTitle($dto->title);
                $project->setDescription($dto->description);
                $project->setTechStack($dto->techStack);
                $project->setGithubUrl($dto->githubUrl);
                $project->setLiveDemoUrl($dto->liveDemoUrl);
                $project->setIsFeatured($dto->isFeatured);

                if ($dto->image) {
                    $imageUrl = $this->handleImageUpload($dto->image);
                    // Supprimer l'ancienne image physiquement
                    $this->deleteImageFile($project->getImageUrl());
                    $project->setImageUrl($imageUrl);
                } elseif ($removeImage) {
                    $this->deleteImageFile($project->getImageUrl());
                    $project->setImageUrl(null);
                }

                $em->flush();

                $this->addFlash('success', 'Le projet a été modifié avec succès.');

                return $this->redirectToRoute('app_admin_dashboard');
            }
        }

        return $this->render('pages/admin_project_form.html.twig', [
            'page_title' => 'Modifier le projet',
            'project' => $dto,
            'project_id' => $project->getId(),
            'current_image' => $project->getImageUrl(),
            'action_url' => $this->generateUrl('app_admin_project_edit', ['id' => $project->getId()]),
        ]);
    }

    #[Route('/delete', name: 'app_admin_project_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        ProjectRepository $projectRepository,
        EntityManagerInterface $em,
    ): Response {
        if (!$this->isCsrfTokenValid('project_delete', $request->request->get('csrf_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');

            return $this->redirectToRoute('app_admin_dashboard');
        }

        $id = (int) $request->request->get('id');
        $project = $projectRepository->find($id);

        if ($project) {
            $this->deleteImageFile($project->getImageUrl());
            $em->remove($project);
            $em->flush();
            $this->addFlash('success', 'Le projet a été supprimé.');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    private function handleImageUpload(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), \PATHINFO_FILENAME);
        // Optionnel: utiliser un slugger pour l'originalFilename
        $newFilename = uniqid('proj_').'.'.$file->guessExtension();

        // On récupère le paramètre d'upload via Container ou on le hardcode (les images vont dans public/uploads/projects)
        $uploadDir = $this->getParameter('kernel.project_dir').'/public/uploads/projects';

        try {
            $file->move($uploadDir, $newFilename);
        } catch (FileException $e) {
            throw new \Exception("Échec de l'upload de l'image");
        }

        return '/uploads/projects/'.$newFilename;
    }

    private function deleteImageFile(?string $imageUrl): void
    {
        if ($imageUrl) {
            $path = $this->getParameter('kernel.project_dir').'/public'.$imageUrl;
            if (file_exists($path) && is_file($path)) {
                unlink($path);
            }
        }
    }
}
