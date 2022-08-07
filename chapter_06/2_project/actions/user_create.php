<?php 
include("../config/db_con.php");
// user create
if(isset($_POST['create'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $query = "INSERT INTO users (username, email, password, phone, address) VALUES ('$username', '$email', '$password', '$phone', '$address')";
    $result = mysqli_query($link, $query);
    if($result){
        //echo "User Created Successfully";
        header("Location: ../thankyou.php");
    }else{
        echo "User Not Created";
    }
}