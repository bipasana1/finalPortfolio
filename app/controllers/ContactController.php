<?php

namespace app\controllers;

use app\core\Controller;

class ContactController extends Controller
{
    public function contactView()
    {
        include_once '../public/assets/views/contact.php';
    }
}