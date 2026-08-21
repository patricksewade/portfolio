<?php

declare(strict_types=1);

namespace App\Core;

use App\Http\Response;

/**
 * Moteur de rendu de vues.
 * Gère l'Output Buffering pour capturer les templates et les injecter dans le layout.
 */
final class ViewRenderer
{
    public function __construct(
        private readonly string $templatesPath,
    ) {}

    /**
     * Rend un template PHP et retourne son contenu sous forme de chaîne.
     *
     * @param array<string, mixed> $data Variables injectées dans la vue.
     * @throws \RuntimeException Si le fichier de vue est introuvable.
     */
    public function render(string $template, array $data = []): string
    {
        $templateFile = $this->templatesPath . '/' . ltrim($template, '/');

        if (!file_exists($templateFile)) {
            throw new \RuntimeException("Vue introuvable : {$templateFile}");
        }

        // Extraction des données pour les rendre disponibles dans la vue via des variables
        extract($data, EXTR_SKIP);

        ob_start();
        require $templateFile;
        return (string) ob_get_clean();
    }

    /**
     * Rend un template et retourne un objet Response prêt à être émis.
     *
     * @param array<string, mixed> $data Variables injectées dans la vue.
     */
    public function renderResponse(string $template, array $data = [], int $statusCode = 200): Response
    {
        $response = new Response($statusCode);
        $response->setBody($this->render($template, $data));
        return $response;
    }
}
