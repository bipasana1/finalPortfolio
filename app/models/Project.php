<?php

namespace app\models;

use app\core\Database;

class Project
{
    use Database;

    protected $table = 'projects';

    public function getAllProjects() {
        $query = "SELECT * FROM projects";
        return $this->query($query);
    }

    public function getProjectById($id) {
        $query = "SELECT * FROM projects WHERE project_id = :id";
        return $this->queryWithParams($query, ['id' => $id]);
    }
}