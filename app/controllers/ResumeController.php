<?php

namespace app\controllers;
use app\core\Controller;

class ResumeController extends Controller
{
    public function resumeView()
    {
        include'../public/assets/views/resume.php';
        exit();
    }
}