<?php
class Entity_User{
   public $username;
   public $password;

   public function __construct($_username, $_password)
   {
      $this->username = $_username;
      $this->password = $_password;
   }

   
}
