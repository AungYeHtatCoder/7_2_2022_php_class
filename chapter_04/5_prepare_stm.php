<?php
include("1_connect_db.php");

// prepare an insert statement
$sql = "INSERT INTO users (firstname, lastname, email, reg_date) VALUES (?, ?, ?, NOW())";


if($stmt = mysqli_prepare($link, $sql)){
    // bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $param_firstname, $param_lastname, $param_email);
    
    // set parameters and execute
    $param_firstname = "Peter";
    $param_lastname = "Parker";
    $param_email = "indavudha@gmail.com";
    mysqli_stmt_execute($stmt);
    $param_firstname = "Ashin";

    $param_lastname = "Indavudha";
    $param_email = "ashinindavudha@gmail.com";
    mysqli_stmt_execute($stmt);

    echo "New records created successfully";
    
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close statement
mysqli_close($link);