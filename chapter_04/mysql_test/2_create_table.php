<?php 
// db connection 
$link = mysqli_connect("localhost", "root", "", "my_lesson_db");

// create table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone VARCHAR(50),
    message VARCHAR(500),
    reg_date TIMESTAMP
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($link);
}