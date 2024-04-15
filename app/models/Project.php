<?php

namespace app\models;
use app\core\Database;


class Project
{
    use Database;

    protected $table = 'projects';

    public function getAllProjects()
    {
        return $this->findAll();
    }
}

