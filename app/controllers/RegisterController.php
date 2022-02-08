<?php

namespace App\Controllers;

use App\Core\App;

class RegisterController {

    public function __construct() {
        $this->userService = App::get('userService');
        
    }
   
    public function index() {
       return $this->userService->registerUser($_POST);
        require_once APP_ROOT . '/app/views/register/index.php';

    }

    
   
}