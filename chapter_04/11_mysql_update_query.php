<?php 
include("1_connect_db.php");

// attempt update query execution

$sql = "UPDATE users SET firstname = 'John', lastname = 'Doe' WHERE id = 1";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);