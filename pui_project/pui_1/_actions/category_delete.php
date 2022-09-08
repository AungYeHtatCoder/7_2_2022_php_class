<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\CategoryTable;

$id = $_GET['id'];

$table = new CategoryTable(new MySQL());
if($table){
 $table->DeleteCategory($id);
 header("Location: ../admin/category_index.php?delsuccess=true");
} else {
 header("Location: ../admin/category_index.php?error=true");
}