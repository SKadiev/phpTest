<?php

namespace App\Service;
use App\Models\User;


class UserService {
    
    protected $pdo;
    protected $validator;


    public function __construct($pdo, $validator, $formater) {
        $this->pdo = $pdo;
        $this->validator = $validator;
        $this->formater = $formater;

    }
  
    public function registerUser($formData) {

        if ($this->validator->validate($formData)) {

            $user = new User('name','email','password', $this->pdo);
            $user->insert($formData);
            return true;

        } 
        
        return false;

    }


 
    
}