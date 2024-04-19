<?php

namespace app\models;

use app\core\Database;

class Contact
{
    use Database;

    protected $table = 'contacts';

    public function saveContact($fullname, $email, $phonenum, $message) {
        $query = "INSERT INTO contacts (fullname, email, phonenum, message) 
                  VALUES (:fullname, :email, :phonenum, :message)";
        return $this->queryWithParams($query, [
            'fullname' => $fullname,
            'email' => $email,
            'phonenum' => $phonenum,
            'message' => $message
        ]);
    }
}
