<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController extends Controller
{
    public function getUsers()
    {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getAllUsers();
        echo json_encode($users);
        exit();
    }

    public function saveUser() {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->saveUser($_POST);
        echo json_encode($users);
        exit();

    }

    public function viewUsers() {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->viewUsers($_GET);
        echo json_encode($users);
        exit();
        
    }

}