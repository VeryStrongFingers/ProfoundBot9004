<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/helpers.php';

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . DIRECTORY_SEPARATOR . 'services.php');

try {
    $container = $builder->build();
} catch (Exception $e) {
    //
}

// Instantiate the env loading process
$container->get(\Dotenv\Dotenv::class);

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . DIRECTORY_SEPARATOR . 'services.php');

try {
    $container = $builder->build();
} catch (Exception $e) {
    //
}

return $container;
