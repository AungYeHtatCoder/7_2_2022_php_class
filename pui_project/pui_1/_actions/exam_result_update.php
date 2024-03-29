<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\ExamResultTable;

$exam_result_data = new ExamResultTable(new MySQL());

$data = [
    'id' => $_POST['id'],
    'program_id' => $_POST['program_id'],
    'student_id' => $_POST['student_id'],
    'class_id' => $_POST['class_id'],
    'sub_myanmar' => $_POST['sub_myanmar'],
    'sub_eng' => $_POST['sub_eng'],
    'sub_math' => $_POST['sub_math'],
    'sub_scient' => $_POST['sub_scient'],
    'sub_geo' => $_POST['sub_geo'],
    'sub_history' => $_POST['sub_history'],
    'examination_id' => $_POST['examination_id'],
    'exam_date' => date("Y-m-d", strtotime($_POST['exam_date'])),
    'exam_time' => $_POST['exam_time'],
    'academic_year' => $_POST['academic_year'],
    'tr_infos_id' => $_POST['tr_infos_id'],
    
];
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// die();
$exam_results = $exam_result_data->UpdateExamResult($data);

// echo "<pre>";
// print_r($exam_results);
// echo "</pre>";
// die();

if($exam_results) {
    header("location: ../admin/exam_result_index.php?success_update=true");
} else {
    echo "error";
}