<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

(new Dotenv())->bootEnv(__DIR__ . '/../.env');

$env = $_SERVER['APP_ENV'] ?? 'test';
$kernel = new Kernel(is_string($env) ? $env : 'test', (bool) ($_SERVER['APP_DEBUG'] ?? false));
$kernel->boot();

return $kernel->getContainer()->get('doctrine')->getManager();