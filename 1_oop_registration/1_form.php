<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Registration Form with Using OOP</title>
 <style>
 body {
  padding: 0;
  margin: 0;
  background: silver;
 }

 #form {
  width: 30%;
  height: 400px;
  background: #fff;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
 }

 input {
  width: 200px;
  height: 30px;
  margin: 5px;
  display: block;
 }

 label {
  margin: 5px;
  font-weight: bold;
 }

 h1 {
  border: 1px solid #ccc;
  text-align: center;
  padding: 20px;
  color: blueviolet;
 }
 </style>
</head>

<body>

 <h1>Registration Form Using with OOP</h1>
 <div id="form">
  <form action="" method="post">
   <label for="">Name:</label>
   <input type="text" name="name" id="" placeholder="Enter Your Name" required="required">
   <label for="">Email:</label>
   <input type="email" name="email" id="" placeholder="Enter Your Email" required="required">
   <label for="">Password:</label>
   <input type="password" name="password" id="" placeholder="Enter Your Password" required="required">

   <input type="submit" name="signup" value="Register">
  </form>
 </div>
</body>

</html>

<?php 
include("reg_process.php");
$db = new db();

if(isset($_POST['signup']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 //$password = $_POST['password'];
 $password = md5($_POST['password']);

 $query = "INSERT INTO users(user_name, user_email, user_pass) VALUES('$name', '$email', '$password')";
 $db->insert($query);
 
}