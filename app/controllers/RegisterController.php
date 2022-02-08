<?php

namespace App\Controllers;

use App\Core\App;

class RegisterController {

    public function __construct() {
        $this->userService = App::get('userService');
        
    }
   
    public function register() {
       $isPassed = $this->userService->registerUser($_POST);
       if ($isPassed) {
           return ['data', $isPassed];
            die('/index');
       } else {
            die('/fail');
       }

    }


    public function index() {
        require_once APP_ROOT . '/app/views/register/index.php';

    }
    public function fail() {
         require_once APP_ROOT . '/app/views/register/fail.php';
 
     }

    
   
}