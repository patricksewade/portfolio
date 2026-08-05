<?php
declare(strict_types=1);

/**
 * Envoie un e-mail en utilisant le protocole SMTP natif via les sockets (fsockopen/stream_socket_client).
 * Ne dépend d'aucune librairie externe (conformément au cahier des charges).
 */
function send_email_smtp(string $to, string $subject, string $message_body): bool {
    $host = $_ENV['SMTP_HOST'] ?? '';
    $port = (int)($_ENV['SMTP_PORT'] ?? 587);
    $user = $_ENV['SMTP_USER'] ?? '';
    $pass = $_ENV['SMTP_PASS'] ?? '';
    $from = $_ENV['SMTP_FROM'] ?? 'no-reply@localhost';
    
    if (empty($host) || empty($user) || empty($pass)) {
        error_log("Configuration SMTP incomplète dans le .env.");
        return false;
    }

    // Le protocole dépend du port (tls/ssl)
    $protocol = 'tcp';
    if ($port === 465) {
        $protocol = 'ssl';
    }

    $socket = @stream_socket_client("{$protocol}://{$host}:{$port}", $errno, $errstr, 15);
    if (!$socket) {
        error_log("Erreur de connexion SMTP : $errstr ($errno)");
        return false;
    }

    // Fonction helper pour lire la réponse du serveur
    $readResponse = function() use ($socket) {
        $response = '';
        while ($str = fgets($socket, 515)) {
            $response .= $str;
            // Si la 4e lettre est un espace, c'est la fin du bloc de réponse
            if (isset($str[3]) && $str[3] === ' ') {
                break;
            }
        }
        return $response;
    };

    // 1. Lire la bannière d'accueil
    $readResponse();

    // 2. Dire EHLO
    fwrite($socket, "EHLO " . ($_SERVER['SERVER_NAME'] ?? 'localhost') . "\r\n");
    $readResponse();

    // 3. Négociation STARTTLS (si port 587)
    if ($port === 587) {
        fwrite($socket, "STARTTLS\r\n");
        $res = $readResponse();
        if (str_starts_with($res, '220')) {
            stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT);
            // Redire EHLO après TLS
            fwrite($socket, "EHLO " . ($_SERVER['SERVER_NAME'] ?? 'localhost') . "\r\n");
            $readResponse();
        }
    }

    // 4. Authentification
    fwrite($socket, "AUTH LOGIN\r\n");
    $readResponse();
    fwrite($socket, base64_encode($user) . "\r\n");
    $readResponse();
    fwrite($socket, base64_encode($pass) . "\r\n");
    $res = $readResponse();
    
    if (!str_starts_with($res, '235')) {
        error_log("Échec de l'authentification SMTP : $res");
        fclose($socket);
        return false;
    }

    // 5. MAIL FROM & RCPT TO
    fwrite($socket, "MAIL FROM:<{$from}>\r\n");
    $readResponse();
    fwrite($socket, "RCPT TO:<{$to}>\r\n");
    $readResponse();

    // 6. DATA
    fwrite($socket, "DATA\r\n");
    $readResponse();

    // 7. Envoi du contenu (Headers + Body)
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    $headers .= "From: Portfolio <{$from}>\r\n";
    $headers .= "To: <{$to}>\r\n";
    $headers .= "Subject: =?utf-8?B?".base64_encode($subject)."?=\r\n";
    
    fwrite($socket, $headers . "\r\n" . $message_body . "\r\n.\r\n");
    $res = $readResponse();
    
    $success = str_starts_with($res, '250');

    // 8. QUIT
    fwrite($socket, "QUIT\r\n");
    fclose($socket);

    return $success;
}
