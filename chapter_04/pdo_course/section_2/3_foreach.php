<?php 
require('conn.php');

$rows = $conn->query("SELECT * FROM posts");

foreach($rows as $row) {
 echo $row['title'] . "<br>";
 echo $row['body'] . "<br>";
 echo $row['created_at'] . "<br>";

}