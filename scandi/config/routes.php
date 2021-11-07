
<?php

$router = new Core\Router();

$router->add(
    'GET',
    '/a',
    [
        'controller' => Controller\BookController::class,
        'action' => 'show'
    ]
);
$router->add(
    'GET',
    '/',
    [
        'controller' => Controller\DefaultController::class,
        'action' => 'show'
    ]
);
$router->add(
    'GET',
    '/b',
    [
        'controller' => Controller\DvdController::class,
        'action' => 'show'
    ]
);
$router->add(
    'GET',
    '/f',
    [
        'controller' => Controller\FurnitureController::class,
        'action' => 'show'
    ]
);

$router->add(
    'post',
    '/addBook',

    [
        'controller' => Controller\BookController::class,
        'action' => 'add',

    ]


);
$router->add(
    'post',
    '/addDvd',

    [
        'controller' => Controller\DvdController::class,
        'action' => 'add',

    ]


);
$router->add(
    'post',
    '/addFurniture',

    [
        'controller' => Controller\FurnitureController::class,
        'action' => 'add',

    ]


);

$router->add(
    'get',
    '/delBook',
    [
        'controller' => Controller\ProductController::class,
        'action' => 'del'
    ]
);
$router->add(
    'get',
    '/delDvd',
    [
        'controller' => Controller\DvdController::class,
        'action' => 'del'
    ]
);
$router->add(
    'get',
    '/delFurniture',
    [
        'controller' => Controller\FurnitureController::class,
        'action' => 'del'
    ]
);
$router->add(
    'get',
    '/showAdd',
    [
        'controller' => Controller\DefaultController::class,
        'action' => 'showAdd'
    ]);
// $router->add(
//     'get',
//     '/showEdit',
//     [
//         'controller' => \App\MVC\Controller\IndexController::class,
//         'action' => 'showEdit'
//     ]
// );
// $router->add(
//     'post',
//     '/showEdit',
//     [
//         'controller' => \App\MVC\Controller\IndexController::class,
//         'action' => 'showEdit'
//     ]
// );
// $router->add(
//     'post',
//     '/edit',
//     [
//         'controller' => \App\MVC\Controller\IndexController::class,
//         'action' => 'edit'
//     ]
// );
// $router->add(
//     'get',
//     '/sortRow',
//     [
//         'controller' => \App\MVC\Controller\IndexController::class,
//         'action' => 'sortRow'
//     ]
// );

return $router;