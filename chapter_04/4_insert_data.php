<?php 
// connect to db
include("1_connect_db.php");

//$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO users (firstname, lastname, email, reg_date) VALUES ('Peter', 'Parker', 'peterparker@mail.com', NOW()),
('Ashin', 'Indavudha', 'ashin@mail.com', NOW())";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>