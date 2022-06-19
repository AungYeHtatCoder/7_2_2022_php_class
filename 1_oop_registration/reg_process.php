<?php 
// registration process
class db{
 public $host = "localhost";
 public $user = "root";
 public $pass = "";
 public $dbname = "oop_project";
 public $link;

 public function __construct(){
  $this->connect();
 }

 private function connect()
 {
  $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
 }

 public function insert($query)
 {
  $result = $this->link->query($query);
  if($result)
  {
   echo "<center><h2>Registration Successful</h2></center>";
  }
  else
  {
   echo "<center><h2>Registration Failed</h2></center>";
  }
 }
}