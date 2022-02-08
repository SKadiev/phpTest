<?php

$router->get('/', 'HomeController/index');
$router->post('/login', 'LoginController/index');
$router->post('/register', 'RegisterController/index');
