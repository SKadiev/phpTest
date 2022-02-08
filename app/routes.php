<?php

$router->get('/', 'HomeController/index');
$router->post('/login', 'LoginController/index');
$router->post('/register', 'RegisterController/register');
$router->get('/index', 'RegisterController/index');

$router->get('/fail', 'RegisterController/fail');
