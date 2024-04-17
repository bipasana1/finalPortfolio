<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
                include '../public/assets/views/main/homepage.php';
//        $this->view('../public/assets/views/main/example-homepage.php', true);
    }
    public function resume()
    {
        include '../public/assets/views/main/resume.html';
    }
    public function projects()
    {
        include '../public/assets/views/main/projects.php';
        
    }
    public function projectDetail()
    {
        include '../public/assets/views/main/project_detail.php';
        
    }
    public function contact()
    {
        include '../public/assets/views/main/contact.html';
    
    }
    public function notFound()
    {
        $this->view('../public/assets/views/main/404.html', true);
    }

}