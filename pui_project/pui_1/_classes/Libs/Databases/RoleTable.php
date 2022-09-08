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

 // Role Create 
 public function CreateRole($data)
 {
  try {
   $query = "INSERT INTO roles (name, value) VALUES (:name, :value)";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $this->db->lastInsertId();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

 // GetRoleById
 public function GetRoleById($id)
 {
  try {
   $query = "SELECT * FROM roles WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute(["id" => $id]);
   return $statement->fetch();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }
 // Role Update
 public function UpdateRole($id, $name, $value)
 {
  try {
   $query = "UPDATE roles SET name = :name, value = :value WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute([':name' => $name, ':value' => $value, ':id' => $id]);
   return $statement->rowCount();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

 // show by id 
 public function ShowById($id)
 {
  try {
   $query = "SELECT * FROM roles WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute(["id" => $id]);
   return $statement->fetch();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }
 
 // Role Delete
 public function DeleteRole($id)
 {
  try {
   $query = "DELETE FROM roles WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute(["id" => $id]);
   return $statement->rowCount();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }
}