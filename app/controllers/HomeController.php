<?php

namespace App\Controllers;

use App\Core\App;

class HomeController {
   
    public function index() {
       
        require_once APP_ROOT . '/app/views/home/index.php';

    }

    
   
}