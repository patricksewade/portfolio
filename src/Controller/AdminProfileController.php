<?php

declare(strict_types=1);

namespace App\Controller;

use App\Dto\ChangePasswordDto;
use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/profile')]
final class AdminProfileController extends AbstractController
{
    #[Route('/password', name: 'app_admin_password', methods: ['GET', 'POST'])]
    public function changePassword(
        Request $request,
        ValidatorInterface $validator,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $em
    ): Response {
        /** @var Admin $user */
        $user = $this->getUser();
        $dto = new ChangePasswordDto();

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('change_password', $request->request->get('csrf_token'))) {
                $this->addFlash('error', 'Jeton de sécurité invalide.');
                return $this->redirectToRoute('app_admin_password');
            }

            $dto->currentPassword = (string) $request->request->get('current_password', '');
            $dto->newPassword = (string) $request->request->get('new_password', '');
            $dto->confirmPassword = (string) $request->request->get('confirm_password', '');

            $errors = $validator->validate($dto);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
                return $this->redirectToRoute('app_admin_password');
            }
            
            $hashedPassword = $passwordHasher->hashPassword($user, $dto->newPassword);
            $user->setPassword($hashedPassword);
            
            $em->flush();

            $this->addFlash('success', 'Votre mot de passe a été modifié avec succès.');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        return $this->render('pages/admin_password.html.twig');
    }
}
