<?php

declare(strict_types=1);

namespace App\Http;

/**
 * Représente une requête HTTP entrante de manière immuable.
 * Encapsule l'accès aux superglobales ($_GET, $_POST, $_SERVER, $_SESSION).
 */
final class Request
{
    /**
     * @param array<string, string>  $queryParams  Paramètres GET
     * @param array<string, mixed>   $body         Corps POST
     * @param array<string, string>  $server       Variables serveur
     * @param array<string, mixed>   $session      Données de session
     */
    public function __construct(
        private readonly string $method,
        private readonly string $uri,
        private readonly array $queryParams,
        private readonly array $body,
        private readonly array $server,
        private readonly array $session,
    ) {}

    /**
     * Crée une instance depuis les superglobales PHP.
     * Ce constructeur statique est le seul endroit où les superglobales sont lues.
     */
    public static function fromGlobals(): self
    {
        $uri = parse_url((string) ($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH) ?? '/';

        return new self(
            method: (string) ($_SERVER['REQUEST_METHOD'] ?? 'GET'),
            uri: $uri,
            queryParams: $_GET,
            body: $_POST,
            server: $_SERVER,
            session: $_SESSION,
        );
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Retourne un paramètre POST ou une valeur par défaut.
     */
    public function getBodyParam(string $key, string $default = ''): string
    {
        return isset($this->body[$key]) ? (string) $this->body[$key] : $default;
    }

    /**
     * Retourne une donnée de session ou null si absente.
     */
    public function getSession(string $key): mixed
    {
        return $this->session[$key] ?? null;
    }

    /**
     * Vérifie si la requête est de type POST.
     */
    public function isPost(): bool
    {
        return $this->method === 'POST';
    }

    /**
     * Vérifie si la requête est de type GET.
     */
    public function isGet(): bool
    {
        return $this->method === 'GET';
    }
}
