<?php 
// db connection
//include("../config/db_con.php");
// check auth
function check(){
  session_start();
  if (isset($_SESSION['username'])) {
    return $_SESSION['username'];

  } else {
    header('Location: ../login_form.php');
  }
}

// user update profile photo
function updatePhoto($id, $name)
{
  // $conn = mysqli_connect('localhost', 'root', '', 'one_project_db');
  global $link;
  $sql = "UPDATE users SET photo = '$name' WHERE id = '$id'";
  $result = mysqli_query($link, $sql);
  if ($result) {
    return true;
  } else {
    return false;
  }
}