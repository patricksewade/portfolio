<?php

declare(strict_types=1);

namespace App\Service;

/**
 * Service d'envoi d'emails via le protocole SMTP natif (fsockets).
 * Remplace la fonction procédurale send_email_smtp() de smtp_socket.php.
 * Aucune dépendance externe (conforme au cahier des charges).
 */
final class SmtpMailer
{
    private readonly string $host;
    private readonly int $port;
    private readonly string $user;
    private readonly string $pass;
    private readonly string $from;

    public function __construct()
    {
        $this->host = $_ENV['SMTP_HOST'] ?? '';
        $this->port = (int) ($_ENV['SMTP_PORT'] ?? 587);
        $this->user = $_ENV['SMTP_USER'] ?? '';
        $this->pass = $_ENV['SMTP_PASS'] ?? '';
        $this->from = $_ENV['SMTP_FROM'] ?? 'no-reply@localhost';
    }

    /**
     * Envoie un email via une connexion SMTP native.
     *
     * @throws \RuntimeException Si la configuration SMTP est incomplète.
     */
    public function send(string $to, string $subject, string $body): bool
    {
        if (empty($this->host) || empty($this->user) || empty($this->pass)) {
            error_log('Configuration SMTP incomplète dans le .env.');
            return false;
        }

        $protocol = $this->port === 465 ? 'ssl' : 'tcp';
        $socket   = @stream_socket_client(
            "{$protocol}://{$this->host}:{$this->port}",
            $errno,
            $errstr,
            15
        );

        if ($socket === false) {
            error_log("Erreur de connexion SMTP : {$errstr} ({$errno})");
            return false;
        }

        $read = function () use ($socket): string {
            $response = '';
            while ($line = fgets($socket, 515)) {
                $response .= $line;
                if (isset($line[3]) && $line[3] === ' ') {
                    break;
                }
            }
            return $response;
        };

        // 1. Bannière d'accueil
        $read();

        // 2. EHLO
        $serverName = $_SERVER['SERVER_NAME'] ?? 'localhost';
        fwrite($socket, "EHLO {$serverName}\r\n");
        $read();

        // 3. STARTTLS (si port 587)
        if ($this->port === 587) {
            fwrite($socket, "STARTTLS\r\n");
            $res = $read();
            if (str_starts_with($res, '220')) {
                stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT);
                fwrite($socket, "EHLO {$serverName}\r\n");
                $read();
            }
        }

        // 4. Authentification
        fwrite($socket, "AUTH LOGIN\r\n");
        $read();
        fwrite($socket, base64_encode($this->user) . "\r\n");
        $read();
        fwrite($socket, base64_encode($this->pass) . "\r\n");
        $res = $read();

        if (!str_starts_with($res, '235')) {
            error_log("Échec d'authentification SMTP : {$res}");
            fclose($socket);
            return false;
        }

        // 5. Enveloppe
        fwrite($socket, "MAIL FROM:<{$this->from}>\r\n");
        $read();
        fwrite($socket, "RCPT TO:<{$to}>\r\n");
        $read();

        // 6. Corps du message
        fwrite($socket, "DATA\r\n");
        $read();

        $encodedSubject = '=?utf-8?B?' . base64_encode($subject) . '?=';
        $headers = implode("\r\n", [
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=utf-8',
            "From: Portfolio <{$this->from}>",
            "To: <{$to}>",
            "Subject: {$encodedSubject}",
        ]);

        fwrite($socket, $headers . "\r\n\r\n" . $body . "\r\n.\r\n");
        $res     = $read();
        $success = str_starts_with($res, '250');

        // 7. Fermeture
        fwrite($socket, "QUIT\r\n");
        fclose($socket);

        return $success;
    }
}
