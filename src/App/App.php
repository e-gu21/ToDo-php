<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
$baseDir = __DIR__ . '/../../';
$dotenv = Dotenv\Dotenv::createImmutable($baseDir);
$envFile = $baseDir . '.env';
if (file_exists($envFile)) {
    $dotenv->load();
}
$dotenv->required(['DB_HOSTNAME', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD']);

require __DIR__ . '/Config.php';
