<?php 

// db connection
include("../db/db_con.php");
// auth check function
function check(){
  if (isset($_SESSION['user_name'])) {
    return $_SESSION['user_name'];

  } else {
    header('Location: ../login_form.php');
  }
}

// user create function 
function user_create($user_name, $email, $password, $phone, $address, $role_id){
    global $link;
    $sql = "INSERT INTO users (user_name, email, password, phone, address, role_id) VALUES ('$user_name', '$email', '$password', '$phone', '$address', '$role_id')";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// user login function
function user_login($email, $password){
    global $link;
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        return true;
    } else {
        return false;
    }
}

// user login with role function
function user_login_with_role($email, $password){
    global $link;
    $sql = "SELECT users.*, roles.name AS role, roles.value FROM users LEFT JOIN roles ON users.role_id = roles.id WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['value'] = $row['value'];
        return true;
    } else {
        return false;
    }
}