<?php

namespace app\controllers;
use app\models\Project;

class ProjectController
{
    public function getProjects() {
        $projectModel = new Project();
        $projects = $projectModel->getAllProjects(); 
        header("Content-Type: application/json");
        echo json_encode($projects);
        exit();
    }    

    public function getProjectDetails($id) {
        $projectModel = new Project();
        header("Content-Type: application/json");
        $project = $projectModel->getProjectById($id);

    }
    public function get_projects() {
        include '../public/assets/views/main/projects.php';
        exit();
    }
}
