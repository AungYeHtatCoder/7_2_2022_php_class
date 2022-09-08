<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\PostTable;

$file_name = $_FILES['file_name']['name'];
$error = $_FILES['file_name']['error'];
$tmp = $_FILES['file_name']['tmp_name'];
$type = $_FILES['file_name']['type'];


$data = [
    'title' => $_POST['title'],
    'category_id' => $_POST['category_id'],
    'description' => $_POST['description'],
    'file_name' => $file_name,
    'user_id' => $_POST['user_id'],
];


if ($error) {
	
 header("Location: ../admin/post_index.php?error=file");
}

if($type === "image/jpeg" or $type === "image/png") {
 
 $table = new PostTable(new MySQL());
 $table->PostCreate($data);
 move_uploaded_file($tmp, "photos/$file_name");
 header("Location: ../admin/post_index.php?success=file");
} else {
 header("Location: ../admin/post_index.php?error=file");
}