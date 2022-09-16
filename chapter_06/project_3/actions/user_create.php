<?php 
//include("../db/db_con.php");
include("../functions.php");

// $data = [
//     'user_name' => $_POST['user_name'],
//     'email' => $_POST['email'],
//     'password' => $_POST['password'],
//     'phone' => $_POST['phone'],
//     'address' => $_POST['address'],
// ];
// echo "<pre>";
// print_r($data);
// echo "</pre>";

if (isset($_POST['user_create']) && isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['address'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role_id = 1;
    $user_create = user_create($user_name, $email, $password, $phone, $address, $role_id);
    if ($user_create) {
        //echo "User created successfully";
        header("Location: ../thankyou.php");
    } else {
        echo "User not created";
    }
}