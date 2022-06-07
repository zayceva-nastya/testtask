<?php

declare(strict_types=1);

namespace Core;

class Router 
{
    protected array $routes;

    public function add(string $method, string $path, array $data): self
    {
        $method = strtolower($method);
        $this->routes[$method][$path] = $data;
        return $this;
    }

    public function dispatch(string $method, string $path): ?array
    {
        $method = strtolower($method);
        $path = preg_replace('/\?.*/', '', $path);
        return $this->routes[$method][$path] ?? null;
    }
}
