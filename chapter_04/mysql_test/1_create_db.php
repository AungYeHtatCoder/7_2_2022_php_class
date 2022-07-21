<?php 
// db connection 
$link = mysqli_connect("localhost", "root", "");

// create db 
$sql = "CREATE DATABASE IF NOT EXISTS my_lesson_db";

if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($link);
}