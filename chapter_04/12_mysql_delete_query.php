<?php 
include("1_connect_db.php");

// attempt delete query execution
$sql = "DELETE FROM users WHERE id = 1";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);