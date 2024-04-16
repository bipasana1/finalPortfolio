<?php

namespace app\controllers;
use app\core\Controller;

class ResumeController extends Controller
{
    public function resumeView()
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/public/assets/views/resume.php';
        exit();
    }
}
