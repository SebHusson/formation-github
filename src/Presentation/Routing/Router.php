<?php

declare(strict_types=1);

namespace App\Presentation\Routing;

use ReflectionFunction;

class Router
{
    private array $routes = [];

    public function register(callable $handler): void
    {
        $reflection = new ReflectionFunction($handler);
        $attributes = $reflection->getAttributes(Route::class);

        foreach ($attributes as $attribute) {
            $route = $attribute->newInstance();
            foreach ($route->methods as $method) {
                $this->routes[$method][$route->path] = $handler;
            }
        }
    }

    public function dispatch(string $method, string $uri): ?string
    {
        // Remove query string
        $uri = strtok($uri, '?');

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            return json_encode(['error' => 'Route not found']);
        }

        $handler = $this->routes[$method][$uri];
        return $handler();
    }
}
