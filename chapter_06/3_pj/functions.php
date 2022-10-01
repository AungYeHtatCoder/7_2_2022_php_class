<?php 
include("config/db_con.php");
// check auth
function check(){
  if (isset($_SESSION['user_name'])) {
    return $_SESSION['user_name'];

  } else {
    header('Location: ../user_login_form.php');
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


// user login function == step 1
// function user_login($email, $password){
//     global $link;
//     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//     $result = mysqli_query($link, $sql);
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         return $row;
//     } else {
//         return false;
//     }
// }


// user login function == step 2
// function user_login($email, $password){
//     global $link;
//     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//     $result = mysqli_query($link, $sql);
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         // session 
//         session_start();
//         $_SESSION['user_id'] = $row['id'];
//         $_SESSION['user_name'] = $row['user_name'];
//         $_SESSION['email'] = $row['email'];
//         $_SESSION['phone'] = $row['phone'];
//         $_SESSION['address'] = $row['address'];
//         $_SESSION['role_id'] = $row['role_id'];
//         return $row;
//     } else {
//         return false;
//     }
// }

// user login with role_id
function user_login($email, $password)
{
    global $link;
    $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // session
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['role_id'] = $row['role_id'];
        $_SESSION['role_name'] = $row['name'];
        $_SESSION['role_value'] = $row['value'];
        return $row;
       
    } else {
        return false;
    }
}


// user logout function
function user_logout(){
    session_start();
    session_destroy();
    header("location:../user_login_form.php");
}