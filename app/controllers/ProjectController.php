<?php

// Create a function to handle request for project Details
//Get project ID from the user click
// Call project model method to fetch the specific project Details
//Prepare the retrives data for use in the frontend


class ProjectController {

    private $db; // Database connection object

    public function __construct($db) {
        $this->db = $db;
    }

    public function getProjectDetails($projectId) {
        $sql = "SELECT * FROM projects WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $projectId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        } else {
            throw new Exception("Project not found");
        }
    }
}
