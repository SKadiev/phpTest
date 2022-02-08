<?php

namespace App\Models;

class User 
{
   protected $name;
   protected $email;
   protected $password;

   protected $filable = [
       'name', 'email', 'password'
   ];

   public function __construct($name, $email, $password,$pdo)
   {
       $this->name = $name;
       $this->email = $email;
       $this->password = $password;
       $this->pdo = $pdo;
   }

   public function insert($data) {
   
    $statement = $this->pdo->insert("user", $data); 
 
    return $statement->fetch();

   }
}