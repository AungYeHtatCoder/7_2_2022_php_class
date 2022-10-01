<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\ExamResultTable;
$id = $_GET['id'];

$exam_result_data = new ExamResultTable(new MySQL());
$exam_results = $exam_result_data->DeleteExamResult($id);

if($exam_results) {
    header("location: ../admin/exam_result_index.php?success_delete=true");
} else {
    echo "error";
}