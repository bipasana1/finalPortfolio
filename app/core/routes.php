<?php

use app\controllers\UserController;
use app\controllers\MainController;
use app\controllers\ProjectController;

$routes = [
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
        'controller' => UserController::class,
        'GET' => 'contact',
        'POST' => 'saveUser'
    ],
    'project_details' => [
        'controller' => ProjectController::class,
        'GET' => 'get_project_details'
    ],
    'get_projects' => [
        'controller' => ProjectController::class,
        'GET' => 'getProjects'
    ]
];