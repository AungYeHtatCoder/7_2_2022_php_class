<?php
namespace Libs\Databases;

use PDO;
use PDOException;

class StudentTable
{
 private $db = null;

 public function __construct($db)
 {
  $this->db = $db->connect();
 }


 // Get all student data
 public function GetAllStudentData()
 {
  $statement = $this->db->prepare("
            SELECT students.*, classes.class_name, classes.class_code, users.name, users.email, users.photo FROM students 
            LEFT JOIN classes ON students.class_id = classes.id
            LEFT JOIN users ON students.user_id = users.id
        ");
  $statement->execute();
  $row = $statement->fetchAll();
  return $row;
  
 }



 // insert into data student
 public function StudentInfoCreate($data)
 {
  try{
   $query = "INSERT INTO students (student_name, father_name, mother_name, father_id_card_no, mother_id_card_no, phone, address, academic_year, class_id, attach_file, user_id, created_at) VALUES (:student_name, :father_name, :mother_name, :father_id_card_no, :mother_id_card_no, :phone, :address, :academic_year, :class_id, :attach_file, :user_id, Now())";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $this->db->lastInsertId();
  }catch(PDOException $e){
   return $e->getMessage();
  }
 }

 // insert into  sutdent info with file
 public function StudentInfoCreateWithFile($data)
 {
  try{
   $query = "INSERT INTO students (student_name, father_name, mother_name, father_id_card_no, mother_id_card_no, phone, address, academic_year, class_id, attach_file, user_id, created_at) VALUES (:student_name, :father_name, :mother_name, :father_id_card_no, :mother_id_card_no, :phone, :address, :academic_year, :class_id, :attach_file, :user_id, Now())";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $this->db->lastInsertId();
  }catch(PDOException $e){
   return $e->getMessage();
  }
 } 

    // Get student data by id 
    public function GetStudentDataById($id)
    {
        $statement = $this->db->prepare("
            SELECT students.*, classes.class_name, classes.class_code, users.name, users.email, users.photo FROM students 
            LEFT JOIN classes ON students.class_id = classes.id
            LEFT JOIN users ON students.user_id = users.id
            WHERE students.id = :id
        ");
        $statement->execute([
            ':id' => $id
        ]);
        $row = $statement->fetch();
        return $row;
    }

    // pdf file download 
    public function DownloadPdfFile($id)
    {
        $statement = $this->db->prepare("
            SELECT students.*, classes.class_name, classes.class_code, users.name, users.email, users.photo FROM students 
            LEFT JOIN classes ON students.class_id = classes.id
            LEFT JOIN users ON students.user_id = users.id
            WHERE students.id = :id
        ");
        $statement->execute([
            ':id' => $id
        ]);
        $row = $statement->fetch();
        return $row;
    }

    // read pdf file only by id
    public function ReadPdfFile($id)
    {
        $statement = $this->db->prepare("
            SELECT students.*, classes.class_name, classes.class_code, users.name, users.email, users.photo FROM students 
            LEFT JOIN classes ON students.class_id = classes.id
            LEFT JOIN users ON students.user_id = users.id
            WHERE students.id = :id
        ");
        $statement->execute([
            ':id' => $id
        ]);
        $row = $statement->fetch();
        return $row;
    }
    
}