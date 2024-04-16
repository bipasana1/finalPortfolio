<?php
define('BASE_PATH', dirname(__FILE__, 3));

// Define application directories relative to BASE_PATH
define('APP_PUBLIC', BASE_PATH . '/public');
define('APP_APP', BASE_PATH . '/app');
define('APP_VIEWS', APP_PUBLIC . '/assets/views');
define('APP_STYLES', APP_PUBLIC . '/assets/styles');
define('APP_IMAGES', APP_PUBLIC . '/assets/images');

spl_autoload_register(function ($classname) {
    require $filename = BASE_PATH . '/' . str_replace('\\', '/', $classname) . ".php";
});
