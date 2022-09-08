<?php 
namespace Libs\Databases;

use PDO;
use PDOException;

class CategoryTable 
{
 private $db = null;

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all category
 public function GetCategory()
 {
  try{
   $query = "SELECT * FROM categories";
   $statement = $this->db->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   return $result;
  }catch(PDOException $e){
   return $e->getMessage();
  }
 }

 // add new category
 public function AddCategory($data)
 {
  try{
   $query = "INSERT INTO categories (category_name, created_at, updated_at) VALUES (:category_name, Now(), Now())";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $this->db->lastInsertId();
  }catch(PDOException $e){
   return $e->getMessage();
  }
 }
 // get category by id
 public function GetCategoryById($id)
 {
  try{
   $query = "SELECT * FROM categories WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute(['id' => $id]);
   $result = $statement->fetch();
   return $result;
  }catch(PDOException $e){
   return $e->getMessage();
  }
 }
// category update
 public function UpdateCategory($id, $category_name)
 {
  try {
   $query = "UPDATE categories SET category_name = :category_name WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute(['id' => $id, 'category_name' => $category_name]);
   return $statement->rowCount();
  } catch (PDOException $e) {
   return $e->getMessage();
  } 
 }
 // category delete
 public function DeleteCategory($id)
 {
  try{
   $query = "DELETE FROM categories WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute(['id' => $id]);
   return $statement->rowCount();
  }catch(PDOException $e){
   return $e->getMessage();
  }
 }
}