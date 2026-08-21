<?php

declare(strict_types=1);

namespace App\Config;

/**
 * Charge les variables d'environnement depuis le fichier .env dans $_ENV.
 * Remplace la fonction procédurale load_env().
 */
final class EnvLoader
{
    /**
     * @throws \RuntimeException Si le fichier .env est introuvable.
     */
    public static function load(string $path): void
    {
        if (!file_exists($path)) {
            throw new \RuntimeException(
                "Fichier d'environnement introuvable : {$path}"
            );
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines === false) {
            throw new \RuntimeException(
                "Impossible de lire le fichier d'environnement : {$path}"
            );
        }

        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            if (!str_contains($line, '=')) {
                continue;
            }

            [$name, $value] = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv("{$name}={$value}");
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}
