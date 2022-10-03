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
//     //$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//     $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE email = '$email' AND password = '$password'";
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

// user login function == step 3
function user_login($email, $password){
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


// admin profile update only function
function admin_profile_update($id, $profile_img){
    global $link;
    $sql = "UPDATE users SET profile_img = '$profile_img' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// get profile image function
function get_profile_img($id){
    global $link;
    $sql = "SELECT profile_img FROM users WHERE id = '$id'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

// admin password update function
function admin_password_update($id, $password){
    global $link;
    $sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}


// admin name update function
function admin_name_update($id, $user_name){
     global $link;
    $sql = "UPDATE users SET user_name = '$user_name' WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// get all admins data from database

function get_all_admins(){
    global $link;
    $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE users.role_id = 1";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return false;
    }
}


// get all User data from database

function get_all_users(){
    global $link;
    $sql = "SELECT users.*, roles.name, roles.value FROM users INNER JOIN roles ON users.role_id = roles.id WHERE users.role_id = 2";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return false;
    }
}

// delete admin / user function
function delete_admin($id){
    global $link;
    $sql = "DELETE FROM users WHERE id = '$id'";
    if (mysqli_query($link, $sql)) {
        return true;
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