<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Presentation\Routing\Router;

// Import the controller functions
require_once __DIR__ . '/../src/Presentation/Controller/TimeController.php';

// Set JSON headers
header('Content-Type: application/json');

// Create router instance
$router = new Router();

// Register routes from controller
$router->register('App\Presentation\Controller\getData');

// Get request method and URI
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Dispatch the request
echo $router->dispatch($method, $uri);
