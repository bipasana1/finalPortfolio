<?php
require_once "../app/core/Database.php"; 
require_once "../app/models/Project.php";
require_once "../app/core/Controller.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/ProjectController.php";
require_once "../app/controllers/ResumeController.php";
require_once "../app/controllers/ContactController.php";

//set our env variables
$env = parse_ini_file('../.env');
require '../app/core/config.php';

use app\controllers\MainController;
use app\controllers\ProjectController;
use app\controllers\ResumeController;
use app\controllers\ContactController;

$uri = strtok($_SERVER["REQUEST_URI"], '?');

if ($uri === '/' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $mainController = new MainController();
    $mainController->homepage();
}

if ($uri === '/projects' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $projectController = new ProjectController();
    $projectController->getProjects();
}

if (preg_match('/^\/projects\/([0-9]+)$/', $uri, $matches) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $projectId = $matches[1];
    $projectController = new ProjectController();
    $projectController->getProject($projectId);
}

if ($uri === '/projects' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectController = new ProjectController();
    $projectController->saveProject();
}

if ($uri === '/resume' && $_SERVER['REQUEST_METHOD'] === 'GET') { // Updated route for resume
    $resumeController = new ResumeController();
    $resumeController->resumeView();
}

if ($uri === '/contact' && $_SERVER['REQUEST_METHOD'] === 'GET') { // Updated route for contact
    $contactController = new ContactController();
    $contactController->contactView();
}

?>
