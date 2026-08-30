<?php

declare(strict_types=1);

namespace App\Controller;

use App\Dto\ContactDto;
use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class ContactController extends AbstractController
{
    #[Route(path: '/contact', name: 'app_contact', methods: ['POST'])]
    public function process(
        Request $request,
        ValidatorInterface $validator,
        EntityManagerInterface $em,
        MailerInterface $mailer,
        \Psr\Log\LoggerInterface $logger
    ): Response {
        if (!$this->isCsrfTokenValid('contact', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide. Veuillez réessayer.');
            return $this->redirectToRoute('app_home', ['_fragment' => 'contact']);
        }

        $dto = new ContactDto();
        $dto->name = trim((string)$request->request->get('name'));
        $dto->email = trim((string)$request->request->get('email'));
        $dto->subject = trim((string)$request->request->get('subject'));
        $dto->message = trim((string)$request->request->get('content')); // The HTML field is 'content'

        $errors = $validator->validate($dto);

        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }
            $this->addFlash('error', implode(' ', $errorMessages));
            return $this->redirectToRoute('app_home', ['_fragment' => 'contact']);
        }

        try {
            $message = new Message();
            $message->setSenderName($dto->name);
            $message->setSenderEmail($dto->email);
            $message->setSubject($dto->subject);
            $message->setContent($dto->message);
            $message->setStatus('unread');
            $message->setCreatedAt(new \DateTimeImmutable());

            $em->persist($message);
            $em->flush();

            // Envoi de l'email
            $email = (new Email())
                ->from($this->getParameter('app.mailer_from'))
                ->to($this->getParameter('app.mailer_to'))
                ->replyTo($dto->email)
                ->subject('Nouveau message de contact : ' . $dto->subject)
                ->text("Nouveau message de : {$dto->name} <{$dto->email}>\n\nSujet : {$dto->subject}\n\n{$dto->message}");

            $mailer->send($email);

            $this->addFlash('success', 'Votre message a bien été envoyé. Merci !');
        } catch (\Throwable $e) {
            $logger->error('Erreur lors de l\'envoi du contact : ' . $e->getMessage(), ['exception' => $e]);
            $this->addFlash('error', 'Une erreur technique est survenue. Veuillez réessayer.');
        }

        return $this->redirectToRoute('app_home', ['_fragment' => 'contact']);
    }
}
