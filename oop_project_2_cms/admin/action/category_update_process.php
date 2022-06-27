<?php
include("../../libs/config.php");
include("../../libs/database.php");
include("../../date_function.php");
//creating database object
$db = new database();
// selecting categories
// get id
$id = $_GET['id'];
$data = [
    $_POST['title']
];
$update = $db->update_category($data);
if ($update) {
    header("Location: ../admin/dashboard.php?msg= Category updated ...");
}else {
    echo "Category did not updated";
}