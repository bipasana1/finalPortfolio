<?php

require_once 'models/Project.php';

class ProjectsController {
  private $db;

  public function __construct($db) {
    $this->db = $db; 
  }

  public function getProjectDetails($projectId) {
    $sql = "SELECT * FROM projects WHERE project_id = :projectId";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":projectId", $projectId, PDO::PARAM_INT);
    $stmt->execute();
    $projectData = $stmt->fetch(PDO::FETCH_ASSOC); 

    if ($projectData) {
      return new Project(
        $projectData['project_id'],
        $projectData['title'],
        $projectData['description'],
        $projectData['skills_used'],
        $projectData['tools_used'],
        $projectData['link']
      );
    } else {
      return null; 
    }
  }
  public function projects()
  {
    include '../public/assets/views/projects/projects.html';
  }

  public function projectDetails($projectId)
  {
    $project = $this->getProjectDetails($projectId);
    if ($project) {
      include '../public/assets/views/projects_details.html';
    } else {

    }
  }
}
