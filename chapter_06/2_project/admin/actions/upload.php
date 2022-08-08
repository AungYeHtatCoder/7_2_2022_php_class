<?php
session_start();
include("../config/db_con.php");

include("../function.php");
$auth = check();

$name =$_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];




    // profile update
    if (isset($_POST['upload'])) {
        $password = $_POST['password'];
        $photo = $_POST['photo'];
        // $phone = $_POST['phone'];
        // $address = $_POST['address'];
        $sql = "UPDATE users SET password = '$password', photo = '$photo' WHERE id = '$auth'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            header("Location: ../profile.php?success");
        } else {
            header("Location: ../profile.php?error");
        }
    }

// if($error)
// {
//  header("Location: ../profile.php");
// }
// if($type == "image/jpeg" || $type == "image/png")
// {
//  $location = "images/".$name;
//  move_uploaded_file($tmp, $location);
//  updatePhoto($auth->id, $name);
//  $auth->photo = $name;
//  header("Location: ../profile.php");
// }
// else
// {
//  header("Location: ../profile.php");
// }