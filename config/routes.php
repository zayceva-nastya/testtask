<?php

declare(strict_types=1);

$router = new Core\Router();

$router->add(
    'GET',
    '/',
    [
        'controller' => Controller\ProductController::class,
        'action' => 'show'
    ]
);

$router->add(
    'post',
    '/add',

    [
        'controller' => Controller\ProductController::class,
        'action' => 'add',
    ]

    );


$router->add(
    'post',
    '/del',
    [
        'controller' => Controller\ProductController::class,
        'action' => 'del'
    ]
);

$router->add(
    'get',
    '/addproduct',
    [
        'controller' => Controller\ProductController::class,
        'action' => 'showAdd'
    ]);

return $router;
