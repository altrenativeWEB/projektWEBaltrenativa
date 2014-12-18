<?php namespace webalternativa\models; 

class User
{
   private $id;
   public $username;
   public $age;
   public $password;
   
   public function __construct( $id, $username, $age, $password )
   {
       $this->id = $id;
       $this->username = $username;
       $this->age = $age;
       $this->password = $password;
   }
   
  
   
}


?>