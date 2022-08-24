<?php 
namespace Libs\Databases;

use PDO;
use PDOException;

class RoleTable 
{
 private $db = null;

 public function __construct($db)
 {
  $this->db = $db->connect();
 }
 

 public function GetRole()
 {
  try{
   $query = "SELECT * FROM roles";
   $statement = $this->db->prepare($query);
   $statement->execute();
   return $statement->fetchAll();
  }catch(PDOException $e){
   return $e->getMessage();
  }
 }
}