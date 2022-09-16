<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\TrInfoTable;

//$id = $_POST['id'];
$data = [
    "tr_name" => $_POST["tr_name"],
    "phone" => $_POST["phone"],
    "secondary_phone" => $_POST["secondary_phone"],
    "address" => $_POST["address"],
    "fix_address" => $_POST["fix_address"],
    "experience" => $_POST["experience"],
    "academic_year" => $_POST["academic_year"],
    "program_id" => $_POST["program_id"],
    "class_id" => $_POST["class_id"],
    "subject_id" => $_POST["subject_id"],
    "user_id" => $_POST["user_id"],
    "id" => $_POST["id"]
];

// echo "<pre>";
// print_r($id);
// echo "</pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($data);
// echo "</pre>";

$table = new TrInfoTable(new MySQL());
//$table->UpdateTrInfo($data, $id);
$update = $table->UpdateTrInfo($data);
// echo "<pre>";
// print_r($update);
// echo "</pre>";
// die();
if($update){
        header("location: ../admin/tr_info_index.php");

}else{
    echo "Data Not Updated";
}