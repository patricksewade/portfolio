<?php

declare(strict_types=1);

namespace App\Core;

use App\Http\Request;
use App\Http\Response;

/**
 * Routeur orienté objet.
 * Enregistre les routes (méthode + URI → [classe, action]) et dispatche la requête.
 */
final class Router
{
    /**
     * Tableau des routes enregistrées.
     * @var array<string, array{class: class-string, action: string}>
     */
    private array $routes = [];

    /**
     * Enregistre une route pour une méthode et une URI données.
     *
     * @param class-string $controllerClass Classe du contrôleur.
     */
    public function addRoute(string $method, string $uri, string $controllerClass, string $action): void
    {
        $key = mb_strtoupper($method) . ':' . $uri;
        $this->routes[$key] = [
            'class'  => $controllerClass,
            'action' => $action,
        ];
    }

    /**
     * Dispatche la requête vers le bon contrôleur.
     * Retourne une Response (200, 404, 405, ou 500).
     *
     * @param array<string, object> $controllers Map [class-string => instance de contrôleur]
     */
    public function dispatch(Request $request, array $controllers): Response
    {
        $uri    = $request->getUri();
        $method = $request->getMethod();

        // Vérifier si l'URI existe pour au moins une méthode (pour distinguer 404 vs 405)
        $uriExists = false;
        foreach (array_keys($this->routes) as $key) {
            [, $registeredUri] = explode(':', $key, 2);
            if ($registeredUri === $uri) {
                $uriExists = true;
                break;
            }
        }

        if (!$uriExists) {
            return $this->buildErrorResponse(404);
        }

        $routeKey = mb_strtoupper($method) . ':' . $uri;

        if (!isset($this->routes[$routeKey])) {
            return $this->buildErrorResponse(405);
        }

        $route           = $this->routes[$routeKey];
        $controllerClass = $route['class'];
        $action          = $route['action'];

        if (!isset($controllers[$controllerClass])) {
            throw new \LogicException(
                "Le contrôleur {$controllerClass} n'a pas été enregistré dans le bootstrap."
            );
        }

        /** @var object $controller */
        $controller = $controllers[$controllerClass];

        try {
            /** @var Response $response */
            $response = $controller->$action($request);
            return $response;
        } catch (\Throwable $e) {
            error_log(
                'Erreur non interceptée : ' . $e->getMessage()
                . ' dans ' . $e->getFile() . ' ligne ' . $e->getLine()
            );
            return $this->buildErrorResponse(500);
        }
    }

    /**
     * Construit une Response d'erreur HTTP avec affichage de la page d'erreur correspondante.
     */
    private function buildErrorResponse(int $code): Response
    {
        $response  = new Response($code);
        $viewPath  = dirname(__DIR__, 2) . "/templates/pages/{$code}.php";

        ob_start();
        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            $message = match ($code) {
                404 => 'La page demandée est introuvable.',
                405 => "La méthode HTTP n'est pas autorisée pour cette route.",
                500 => 'Une erreur interne du serveur s\'est produite.',
                default => 'Erreur inconnue.',
            };
            echo "<div style='font-family:sans-serif;text-align:center;padding-top:50px'>";
            echo "<h1>Erreur {$code}</h1><p>{$message}</p></div>";
        }
        $response->setBody((string) ob_get_clean());

        return $response;
    }
}
