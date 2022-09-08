<?php 
include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\ClassTable;

$data =[
"class_name" => $_POST['class_name'],
"class_code" => $_POST['class_code']
];

// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();

$table = new ClassTable(new MySQL());

// $cl = $table->CreateClass($data);
// echo "<pre>";
// print_r($cl);
// echo "</pre>";
// die();
if($table){
 $table->CreateClass($data);
 header("Location: ../admin/class_index.php?addsuccess=true ");
} else {
 header("Location: ../admin/class_index.php", "error=true");
}