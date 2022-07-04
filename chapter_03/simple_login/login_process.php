<?php 
session_start();
// simple login process
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == 'admin' && $password == 'admin') {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
  } else {
    echo '<div class="alert alert-danger" role="alert">Invalid username or password</div>';
  }
}