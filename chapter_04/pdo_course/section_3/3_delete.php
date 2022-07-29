<?php 

require('conn.php');
$id = 3;
$delete = $conn->prepare("DELETE FROM posts WHERE id = :id");

$delete->execute(array(
 'id' => $id
));

if ($delete) {
 echo "Deleted";
}else {
 echo "Error";
}