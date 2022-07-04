<?php 
// create db
// $link = mysqli_connect("localhost", "root", "", "mysql_basic");
include("1_connect_db.php");

// create database
$sql = "CREATE DATABASE my_db";
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
