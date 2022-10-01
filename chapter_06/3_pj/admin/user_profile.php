<?php 
session_start();
include("../functions.php");
$auth = check();

// user_login session 
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$role_id = $_SESSION['role_id'];
$role_name = $_SESSION['role_name'];
$role_value = $_SESSION['role_value'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <h1>user profile page</h1>
 <h2><?= $auth ?></h2>
 <table class="table">
  <thead>
   <tr>
    <th>ID</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Role ID</th>
    <th>Role Name</th>
    <th>Role Value</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td><?= $user_id ?></td>
    <td><?= $user_name ?></td>
    <td><?= $email ?></td>
    <td><?= $phone ?></td>
    <td><?= $address ?></td>
    <td><?= $role_id ?></td>
    <td><?= $role_name ?></td>
    <td><?= $role_value ?></td>
   </tr>
  </tbody>
 </table>
 <a href="../actions/logout.php">logout</a>
</body>

</html>