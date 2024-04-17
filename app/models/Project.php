<?php

class Project {

    private $id;
    private $title;
    private $description;
    private $skills;
    private $tools;
    private $link;

    public function __construct($id, $title, $description, $skills, $tools, $link) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->skills = $skills;
        $this->tools = $tools;
        $this->link = $link;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getSkills() {
        return $this->skills;
    }

    public function getTools() {
        return $this->tools;
    }

    public function getLink() {
        return $this->link;
    }
}