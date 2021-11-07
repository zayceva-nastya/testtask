<?php

namespace Core;


class Router 
{
    protected array $routes;

    public function add(string $method, string $path, array $data): self
    {
        $method = strtolower($method);

        // if (!in_array($method, ['get', 'post'], true)) {
        //     throw new \RuntimeException("Ну как бэ нет такого метода у HTTP");
        // }

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
