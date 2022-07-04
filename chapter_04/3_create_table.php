<?php 
include("1_connect_db.php");
// create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if(mysqli_query($link, $sql)){
    echo "Table users table created successfully";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}