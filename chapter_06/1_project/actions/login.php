<?php 
    session_start();

// user login 
include("../config/db_con.php");

// login with md5 password 
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password =  md5($_POST['password']);
  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);
  if($count == 1){
    
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['address'] = $row['address'];
    
    header("location: ../profile.php");
  }else{
    header("location: ../login_form.php");
  }
  // $result = mysqli_query($link, $sql);
  // if(mysqli_num_rows($result) > 0){
  //   header("Location: ../thankyou.php");
  // } else{
  //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  // }
}