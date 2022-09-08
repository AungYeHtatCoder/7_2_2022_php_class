<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\CategoryTable;

$data = [
"category_name" => $_POST['category_name'],
];
echo "<pre>";
print_r($data);
echo "</pre>";
//die();
$table = new CategoryTable(new MySQL());
// $data_test = $table->AddCategory($data);
// echo "<pre>";
// print_r($data_test);
// echo "</pre>";
// die();
// if($data_test){
// header("Location: ../admin/category_index.php?addsuccess=true ");
// } else {
// header("Location: ../admin/category_index.php", "error=true");
// }

if($table)
{
    $table->AddCategory($data);
    header("Location: ../admin/category_index.php?addsuccess=true");
}
else
{
    header("Location: ../admin/category_index.php?addsuccess=false");
}