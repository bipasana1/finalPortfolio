<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Project;

class ProjectController extends Controller
{
    public function actionIndex()
    {
        // Create an instance of the Project model
        $projectModel = new Project();
        
        // Fetch all projects from the database
        $projects = $projectModel->getAllProjects();
        
        // Return projects as JSON
        return $this->asJson($projects);
    }
    
    public function actionView($id)
    {
        // Fetch a project by ID from the database
        $projectModel = new Project();
        $project = $projectModel->findOne($id);
        
        // If project is not found, throw a 404 Not Found exception
        if (!$project) {
            throw new NotFoundHttpException('The requested project does not exist.');
        }
        
        // Return the project as JSON
        return $this->asJson($project);
    }
}