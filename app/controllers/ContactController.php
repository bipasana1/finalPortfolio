<?php

namespace app\controllers;

use app\core\Controller;

class ContactController extends Controller
{
    public function contactView()
    {
        include '../public/assets/views/contact.php';
    }
}