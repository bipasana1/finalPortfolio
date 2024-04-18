<?php

use app\controllers\UserController;
use app\controllers\MainController;
use app\controllers\ProjectController;

$routes = [
    'users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
    ],
    'homepage' => [
        'controller' => MainController::class,
        'GET' => 'homepage'
    ],
    'resume' => [
        'controller' => MainController::class,
        'GET' => 'resume'
    ],
    'projects' => [
        'controller' => MainController::class,
        'GET' => 'projects'
    ],
    'contact' => [
        'controller' => MainController::class,
        'GET' => 'contact'
    ],
    'project_detail' => [
        'controller' => ProjectController::class,
        'GET' => 'getProjectDetails'
    ],
    'button' => [
        'controller' => ProjectController::class,
        'GET' => 'getProjectDetails'
    ]
];