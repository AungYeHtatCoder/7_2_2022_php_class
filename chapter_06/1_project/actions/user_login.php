<?php 
include("../config/db_con.php");
// user login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) > 0){
        //echo "User Login Successfully";
        header("Location: ../profile.php");
    }else{
        echo "User Not Login";
    }
}