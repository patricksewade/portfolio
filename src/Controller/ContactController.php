<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\ViewRenderer;
use App\Http\Request;
use App\Http\Response;
use App\Repository\MessageRepository;
use App\Service\SecurityService;
use App\Service\SmtpMailer;

/**
 * Contrôleur du formulaire de contact.
 */
final class ContactController
{
    public function __construct(
        private readonly MessageRepository $messageRepository,
        private readonly SmtpMailer $mailer,
        private readonly ViewRenderer $viewRenderer,
        private readonly SecurityService $securityService,
    ) {}

    /**
     * Traite la soumission du formulaire de contact (POST uniquement).
     * Validation, insertion en BDD, envoi d'email, pattern PRG.
     */
    public function process(Request $request): Response
    {
        if (!$this->securityService->verifyCsrfToken($request->getBodyParam('csrf_token'))) {
            $_SESSION['flash_error'] = 'Jeton de sécurité invalide. Veuillez réessayer.';
            return Response::redirect(BASE_URL . '/#contact');
        }

        $name    = trim($request->getBodyParam('name'));
        $email   = trim($request->getBodyParam('email'));
        $subject = trim($request->getBodyParam('subject'));
        $message = trim($request->getBodyParam('message'));

        if (empty($name) || empty($email) || empty($message)) {
            $_SESSION['flash_error'] = 'Tous les champs obligatoires doivent être remplis.';
            return Response::redirect(BASE_URL . '/#contact');
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $_SESSION['flash_error'] = 'Adresse email invalide.';
            return Response::redirect(BASE_URL . '/#contact');
        }

        // Insertion en base de données
        $inserted = $this->messageRepository->insert($name, $email, $subject, $message);

        if (!$inserted) {
            $_SESSION['flash_error'] = 'Une erreur technique est survenue. Veuillez réessayer.';
            return Response::redirect(BASE_URL . '/#contact');
        }

        // Envoi de l'email de notification (non bloquant en cas d'échec)
        $emailBody = "Nouveau message de : {$name} <{$email}>\n\nSujet : {$subject}\n\n{$message}";
        $this->mailer->send(
            $_ENV['SMTP_USER'] ?? '',
            "Nouveau message de contact : {$subject}",
            $emailBody,
        );

        $_SESSION['flash_success'] = 'Votre message a bien été envoyé. Merci !';
        return Response::redirect(BASE_URL . '/#contact');
    }
}
