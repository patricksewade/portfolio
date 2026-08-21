<?php

declare(strict_types=1);

namespace App\Http;

/**
 * Représente une réponse HTTP sortante.
 * Le contenu est accumulé puis émis via send().
 */
final class Response
{
    private string $body = '';

    public function __construct(
        private int $statusCode = 200,
        /** @var array<string, string> */
        private array $headers = [],
    ) {}

    /**
     * Crée une réponse de redirection (pattern PRG).
     */
    public static function redirect(string $url, int $statusCode = 302): self
    {
        $response = new self($statusCode);
        $response->headers['Location'] = $url;
        return $response;
    }

    /**
     * Définit le corps HTML de la réponse.
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * Émet les headers et le corps vers le client.
     * Doit être appelé une seule fois, dans le bootstrap (index.php).
     */
    public function send(): never
    {
        http_response_code($this->statusCode);

        foreach ($this->headers as $name => $value) {
            header("{$name}: {$value}");
        }

        echo $this->body;
        exit;
    }
}
