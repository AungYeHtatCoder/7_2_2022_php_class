<?php
// db connection
// $db = new PDO('mysql:host=localhost;dbname=gallery_db', 'root', '');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'gallery_db');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if($connection) {
//  echo "Connected";
//     //die("Connection failed: " . mysqli_connect_error());
// }else{
//      echo "error";
// }