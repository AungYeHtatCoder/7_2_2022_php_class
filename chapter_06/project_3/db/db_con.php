<?php 
define( 'DB_NAME', 'three_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

// db connection 
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if (!$link) {
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo "Connected successfully";
// }