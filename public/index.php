<?php

require_once '../app/core/init.php';
require_once '../app/core/routes.php';
$env = parse_ini_file('../.env');
require '../app/core/config.php';

use app\core\Router;
use app\controllers\MainController;
use app\controllers\UserController;

require_once __DIR__ . '/helpers.php';

//to add a new route add to the app/core/routes.php array
$router = new Router($routes);
$router->serveRoute();



?>