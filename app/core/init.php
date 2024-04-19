<?php
define('APP_ROOT', dirname(__FILE__, 3));
define('APP_PUBLIC', dirname(__FILE__, 3) . '/public');
define('APP_APP', dirname(__FILE__, 3) . '/app');
define('APP_VIEWS', dirname(__FILE__, 3) . '/public/assets/views');

spl_autoload_register(function ($classname) {
    require $filename = APP_ROOT . '/' . str_replace('\\', '/', $classname) . ".php";
});