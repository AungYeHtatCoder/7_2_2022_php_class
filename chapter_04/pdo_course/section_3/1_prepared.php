<?php
require('conn.php');

$title = "My first post";
$body = "This is my first post";

// query to insert data

$insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");
$insert->execute(array(
 'title' => $title,
 'body' => $body
));

if ($insert) {
 echo "Inserted";
}else {
 echo "Error";
}