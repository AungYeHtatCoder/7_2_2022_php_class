<?php
require('conn.php');
$newTitle = "hello from post one";
$id = 1;

$update = $conn->prepare("UPDATE posts SET title = :title WHERE id = :id");

$update->execute(array(
 'title' => $newTitle,
 'id' => $id
));

if ($update) {
 echo "Updated";
}else {
 echo "Error";
}