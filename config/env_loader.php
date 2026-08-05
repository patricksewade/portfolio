<?php
declare(strict_types=1);

/**
 * Charge les variables d'environnement depuis un fichier .env
 * dans la superglobale $_ENV de manière procédurale.
 */
function load_env(string $path): void {
    if (!file_exists($path)) {
        die("Erreur critique : Fichier d'environnement introuvable au chemin : " . $path);
    }
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) {
            continue;
        }
        
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);
            
            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}
