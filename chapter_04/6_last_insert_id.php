<?php 
include("1_connect_db.php");

// attempt insert query execution
$sql = "INSERT INTO users (firstname, lastname, email, reg_date) VALUES ('Aung', 'YeeHtet', 'aungyehtet@gmail.com', NOW())";

if(mysqli_query($link, $sql)){
    // obtain last inserted id
    $last_id = mysqli_insert_id($link);
    echo "Records added successfully : <br>" . "Your Last Inserted ID is : " . "<h1>" . $last_id . "</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);