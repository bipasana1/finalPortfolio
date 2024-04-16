<?php
define('BASE_PATH', dirname(__FILE__, 3));

// Define application directories relative to BASE_PATH
define('APP_PUBLIC', BASE_PATH . '/public');
define('APP_APP', BASE_PATH . '/app');
define('APP_VIEWS', APP_PUBLIC . '/assets/views');
define('APP_STYLES', APP_PUBLIC . '/assets/styles');
define('APP_IMAGES', APP_PUBLIC . '/assets/views/images');

// Database configuration constants
define('DB_NAME', $_ENV['DBNAME']);
define('DB_HOST', $_ENV['DBHOST']);
define('DB_USER', $_ENV['DBUSER']);
define('DB_PASS', $_ENV['DBPASS']);

spl_autoload_register(function ($classname) {
    require $filename = BASE_PATH . '/' . str_replace('\\', '/', $classname) . ".php";
});
?>
