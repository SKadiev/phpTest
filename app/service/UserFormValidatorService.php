<?php

namespace App\Service;

use App\Classes\Validator;
use App\Models\User;


class UserFormValidatorService implements Validator {
    

    private $passwordPatern =  "/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{7,}$/";
    private $usernameLength =  3;
    private $error = null;

    public function validate($data):bool {

        $username = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        if(empty($username) || strlen($username) < $this->usernameLength) {
            $this->error = "<p>Error: Name requires a minimum of" . $this->usernameLength.  ">characters</p>";
            return false;
        }

        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error = "<p>Error: Please provide a valid email address</p>";
            return false;
        }

        if(empty($password) || preg_match($this->passwordPatern, $password) === 0) {
            $this->error = "<p>Error: Password is invalid</p>";
            return false;
        }

        return true;


    }
  
}