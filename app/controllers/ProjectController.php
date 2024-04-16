<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Project;

class ProjectController extends Controller
{
    public function getProjects()
    {
        $projectModel = new Project();
        header("Content-Type: application/json");
        $projects = $projectModel->getAllProjects();
        echo json_encode($projects);
        exit();
    }

    public function getProject($id)
    {
        $projectModel = new Project();
        header("Content-Type: application/json");
        $project = $projectModel->getProjectById($id);
        if (!$project) {
            http_response_code(404);
            echo json_encode(['error' => 'Project not found']);
            exit();
        }
        echo json_encode($project);
        exit();
    }

    public function saveProject()
    {
        $projectData = [
            'title' => $_POST['title'] ?? '',
            'description' => $_POST['description'] ?? '',
            'link' => $_POST['link'] ?? '',
            'skills' => $_POST['skills'] ?? '',
            'tools' => $_POST['tools'] ?? ''
        ];

        $projectModel = new Project();
        $success = $projectModel->saveProject($projectData);
        
        if ($success) {
            http_response_code(201);
            echo json_encode(['message' => 'Project created successfully']);
        } else {
            http_response_code(500); // Server Error
            echo json_encode(['message' => 'Failed to save project']);
        }
        exit();
    }

} 