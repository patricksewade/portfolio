<?php
declare(strict_types=1);
require_once BASE_PATH . '/includes/dal/messages_dal.php';
require_once BASE_PATH . '/includes/utils/smtp_socket.php';


function handle_contact_post(PDO $pdo): void {
    require_valid_csrf();
    
    $name = trim(strip_tags((string)($_POST['name'] ?? '')));
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = trim(strip_tags((string)($_POST['subject'] ?? '')));
    $content = trim(strip_tags((string)($_POST['content'] ?? '')));
    
    if (!$name || !$email || !$subject || !$content) {
        $_SESSION['flash_error'] = "Veuillez remplir tous les champs correctement avec une adresse email valide.";
        header('Location: ' . BASE_URL . '/#contact');
        exit;
    }
    
    // Insertion en BDD
    $inserted = insert_message($pdo, [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'content' => $content
    ]);
    
    if ($inserted) {
        // Envoi de l'email via Socket SMTP Natif
        $mail_body = "Nouveau message de : $name ($email)\n\n$content";
        send_email_smtp('contact@patrick-sewade.local', 'Portfolio Contact: ' . $subject, $mail_body);
        
        $_SESSION['flash_success'] = "Votre message a bien été envoyé ! Je vous répondrai dans les plus brefs délais.";
    } else {
        $_SESSION['flash_error'] = "Une erreur est survenue lors de l'enregistrement de votre message.";
    }
    
    header('Location: ' . BASE_URL . '/#contact');
    exit;
}
