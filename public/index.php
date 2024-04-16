<?php

require_once "../app/core/Database.php";
require_once "../app/models/Project.php";
require_once "../app/core/Controller.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/ProjectController.php";
require_once "../app/controllers/ResumeController.php";
require_once "../app/controllers/ContactController.php";

// Set up environment variables
$env = parse_ini_file('../.env');
require '../app/core/config.php';

use app\controllers\MainController;
use app\controllers\ProjectController;
use app\controllers\ResumeController;
use app\controllers\ContactController;

$uri = strtok($_SERVER["REQUEST_URI"], '?');

// Handle different routes
switch ($uri) {
    case '/':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->homepage();
        }
        break;
    case '/projects':
        // Serve HTML view for projects
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $projectController = new ProjectController();
            $projectController->projectsView();
            exit();
        }
        break;
    case '/resume':
        // Serve HTML view for resume
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $resumeController = new ResumeController();
            $resumeController->resumeView();
            exit();
        }
        break;
    case '/contact':
        // Serve HTML view for contact
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $contactController = new ContactController();
            $contactController->contactView();
            exit();
        }
        break;
    default:
        // Handle 404 Not Found
        http_response_code(404);
        echo '404 Not Found';
        break;
}
?>