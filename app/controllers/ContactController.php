<?php

namespace app\controllers;
use app\models\Contact;

class ProjectController
{
    public function saveContact(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $message = $_POST['message'];

        $contactModel = new Contact();

        $contactModel->saveContact($fullname, $email, $phonenum, $message);

        header("Location: contact.php");
        exit();
        }
    }
}

?>
