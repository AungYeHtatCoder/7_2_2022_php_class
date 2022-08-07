<?php 
// check auth
function check(){
  if (isset($_SESSION['username'])) {
    return $_SESSION['username'];

  } else {
    header('Location: ../login_form.php');
  }
}

// Auth check WITH USERNMAE AND EMAIL, PHONE AND ADDRESS
function check_auth(){
  if (isset($_SESSION['username'])) {
    return true;
  } else {
    return false;
  }
}