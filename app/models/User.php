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
    foreach (array_keys($data) as $value) {
    
        if (!in_array($value,$this->filable)) {
            unset($data[$value]);
        }
    }
  
    $statement = $this->pdo->insert("users", $data); 
 
    return $statement;

   }
}