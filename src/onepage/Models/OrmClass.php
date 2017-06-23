<?php

// classe qui va etre lié a une table en particulier dans la base de donnée 
class Orm {

  // On reprends le singleton dans cms -> Library
  private static $_instance = null;
  private $user = "root";
  private $password = "0000";
  private $db = "portfolio";


  private function __construct() {

  }
  public static function getInstance()
  {
    if(is_null(self::$_instance)) {
      self::$_instance = new Orm();
    }
    return self::$_instance;
  }

public function getAllData($table) // argument le nom de la table
{
return new PDO('mysql:host=localhost; dbname=' . $this->db . '', $this->user, $this->password );
}

}

 ?>
