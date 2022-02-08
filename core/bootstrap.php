<?php

use App\Classes\JsonFormat;
use App\Core\App;
use App\Core\Database\Connection;
use App\Service\UserFormValidatorService;
use App\Service\UserService;

App::bind('config', require_once '../config.php');


App::bind('userService', new UserService(
    Connection::make(App::get('config')['database'])
    , new UserFormValidatorService(), new JsonFormat()));
    
