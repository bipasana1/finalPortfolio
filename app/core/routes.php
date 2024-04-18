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
    'homepage.php' => [
        'controller' => MainController::class,
        'GET' => 'homepage'
    ],
    'resume.php' => [
        'controller' => MainController::class,
        'GET' => 'resume'
    ],
    'projects.php' => [
        'controller' => MainController::class,
        'GET' => 'projects'
    ],
    'contact.php' => [
        'controller' => MainController::class,
        'GET' => 'contact'
    ],
    'projects.php' => [ 
        'controller' => ProjectController::class, 
        'GET' => 'getProjects' 
    ],
    'project_detail.php' => [
        'controller' => ProjectController::class,
        'GET' => 'getProjectDetails'
    ]
];