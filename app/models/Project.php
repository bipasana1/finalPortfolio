<?php

namespace app\models;
use app\core\Database;


class Project
{
    use Database;

    protected $table = 'projects';

    public function getAllProjects() {
        $query = "select * from projects"; 
        return $this->fetchAll($query); 
    }

    public function getProjectById($id) {
        $query = "select * from projects where id = :id"; 
        return $this->queryWithParams($query, ['id' => $id]); 
    }

    public function saveProject($projectData)
    {
        $query = "INSERT INTO {$this->table} (title, description, link, skills, tools) VALUES (:title, :description, :link, :skills, :tools)";
        $params = [
            'title' => $projectData['title'],
            'description' => $projectData['description'],
            'link' => $projectData['link'],
            'skills' => $projectData['skills'],
            'tools' => $projectData['tools']
        ];
        return $this->execute($query, $params);
    }
}