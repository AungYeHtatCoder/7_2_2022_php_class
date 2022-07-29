<?php
require('conn.php');

$title = "hello from post one";
$body = "This is my first post";

$insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");
$insert->execute(array(
 'title' => $title,
 'body' => $body
));

echo ($conn->lastInsertId()) ? "Inserted" : "Error";