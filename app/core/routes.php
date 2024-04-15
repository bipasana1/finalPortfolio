<?php

use app\controllers\ProjectController;
use app\controllers\UserController;

$routes = [
    'users' => [
        'controller' => ProjectController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => ProjectController::class,
        'GET' => 'getUsers',
    ]
];