<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\CategoryTable;

// $data =[
// "name" => $_POST['name'],
// "value" => $_POST['value']
// ];
$id = $_POST['id'];
//$id = $_GET['id'];
$category_name = $_POST['category_name'];



// echo $id;
// die();
$table = new CategoryTable(new MySQL());

if($table){
 $table->UpdateCategory($id, $category_name);
 header("Location: ../admin/category_index.php?success=true");
} else {
 header("Location: ../admin/category_index.php?error=true");
}