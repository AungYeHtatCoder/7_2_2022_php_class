<?php 
// use PDO;
// use PDOException;
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

 // public function get_user()
 // {
 //  $query = "SELECT * FROM users";
 //  $result = $this->link->query($query);
 //  if($result->num_rows > 0)
 //  {
 //   while($row = $result->fetch_assoc())
 //   {
 //    echo "<center><h2>".$row['user_name']."</h2></center>";
 //   }
 //  }
 // }

 // get user data
 public function get_user_data()
 {
  $query = "SELECT * FROM users";
  $result = $this->link->query($query);
  if($result->num_rows > 0)
  {
   echo "<table class='table table-bordered'>";
   echo "<tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
       </tr>";
   while($row = $result->fetch_assoc())
   {
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['user_name']."</td>
    <td>".$row['user_email']."</td>
    <td>".$row['user_pass']."</td>
    </tr>";
   }
   echo "</table>";
  }
  
 }

 // user login
 public function user_login($email, $password)
 {
  $query = "SELECT * FROM users WHERE user_email = '$email' AND user_pass = '$password'";
  $result = $this->link->query($query);
  if($result->num_rows > 0)
  {
   header("location:index.php");
   //return true;
  }
  else
  {
   echo"<center><h2>Login Failed</h2></center>";
   header("location:login.php");
   //return false;
  }
 }
 // user search data
 public function user_search($search_text)
 {
  $query = "SELECT * FROM users WHERE user_name LIKE '%$search_text%' OR user_email LIKE '%$search_text%'";
  $result = $this->link->query($query);
  if($result->num_rows > 0)
  {
   echo "<table class='table table-bordered'>";
   echo "<tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
       </tr>";
   while($row = $result->fetch_assoc())
   {
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['user_name']."</td>
    <td>".$row['user_email']."</td>
    <td>".$row['user_pass']."</td>
    </tr>";
   }
   echo "</table>";
  }
  else
  {
   echo "<center><h2>No Result Found</h2></center>";
  }
 }
 // user logout
 public function user_logout()
 {
  session_destroy();
  header("location:login.php");
 }
 
}