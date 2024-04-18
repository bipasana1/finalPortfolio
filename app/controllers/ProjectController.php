<?php

namespace app\controllers;

use app\models\Project;

class ProjectController
{
    public function getProjects() {
        $projectModel = new Project();
        header("Content-Type: application/json");
        $projects = $projectModel->getAllProjects(); // Assuming a method to get all projects
        echo json_encode($projects);
        exit();
    }

    public function getProjectDetails($id) {
        $projectModel = new Project();
        header("Content-Type: application/json");
        $project = $projectModel->getProjectById($id);

        // Handle cases where project is not found (optional)
        if (!$project) {
            http_response_code(404);
            echo json_encode(['message' => 'Project not found']);
            exit();
        }

        echo json_encode($project);
        exit();
    }
}
