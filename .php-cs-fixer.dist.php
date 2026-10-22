<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
        __DIR__.'/config',
    ])
    ->append([
        __FILE__,
    ])
    ->exclude([
        'var',
        'vendor',
    ])
    ->notPath([
        'bundles.php',
        'reference.php',
    ]);

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules([
        // Ensembles de règles fondamentaux
        '@PER-CS' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,

        // Typage strict et modernisation
        'declare_strict_types' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],

        // Organisation des imports
        'ordered_imports' => [
            'imports_order' => ['class', 'function', 'const'],
            'sort_algorithm' => 'alpha',
        ],
        'no_unused_imports' => true,

        // Clarté et standardisation
        'native_function_invocation' => [
            'include' => ['@compiler_optimized'],
            'scope' => 'namespaced',
            'strict' => true,
        ],
        'global_namespace_import' => [
            'import_classes' => false,
            'import_constants' => false,
            'import_functions' => false,
        ],
    ])
    ->setFinder($finder)
    ->setCacheFile(__DIR__.'/var/.php-cs-fixer.cache');
