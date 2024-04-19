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

    public function getProjectDetails() {
        $id = $_GET['project_id'];
        $projectModel = new Project();
        header("Content-Type: application/json");
        $project = $projectModel->getProjectById($id);
        echo json_encode($project);
        exit();
    }
    
    public function get_projects() {
        include '../public/assets/views/main/projects.php';
        exit();
    }

    public function get_project_details() {
        include '../public/assets/views/main/project_detail.php';
        exit();
    }
}
