<?php 

include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\ExamResultTable;

$student_id = $_GET['id'];
$table = new ExamResultTable(new MySQL());
$exam_result = $table->GetExamResultByStudentId($student_id);
?>

<?php 
include("includes/head.php"); 
include("includes/extral_head.php"); 
?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_header.php"); ?>
 <div id="layoutSidenav">
  <?php include("includes/sidebar.php"); ?>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4"> Examintion Result Details Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><?php echo $auth->name; ?> : Examintion Result Details Dashboard</li>
     </ol>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       <h4>Examintion Result Details <span><a href="exam_result_index.php" class="btn btn-primary">Back</a></span></h4>
      </div>
      <div class="card-body">
       <!-- Add Datatable -->
       <table class="table">
        <tr>
         <th>ID</th>
         <td><?= $exam_result->id; ?></td>
        </tr>
        <tr>
         <th>Program Name</th>
         <td><?= $exam_result->program_name; ?></td>
        </tr>
        <tr>
         <th>Student Name</th>
         <td><?= $exam_result->student_name; ?></td>
        </tr>
        <tr>
         <th>Class Name</th>
         <td><?= $exam_result->class_name; ?></td>
         <th>Class Code </th>
         <td><?= $exam_result->class_code; ?></td>
        </tr>
        <tr>
         <th>Myanmar Subject Mark</th>
         <td><?= $exam_result->sub_myanmar; ?></td>
        </tr>
        <tr>
         <th>English Subject Mark</th>
         <td><?= $exam_result->sub_eng; ?></td>
        </tr>
        <tr>
         <th>Math Subject Mark</th>
         <td><?= $exam_result->sub_math; ?></td>
        </tr>
        <tr>
         <th>Scient Subject Mark</th>
         <td><?= $exam_result->sub_scient; ?></td>
        </tr>
        <tr>
         <th>Geo Subject Mark</th>
         <td><?= $exam_result->sub_geo; ?></td>
        </tr>
        <tr>
         <th>History Subject Mark</th>
         <td><?= $exam_result->sub_history; ?></td>
        </tr>
        <tr>
         <th>Total Marks</th>
         <td>
          <span class="badge bg-secondary"><?= $exam_result->total_marks; ?></span>
         </td>
        </tr>
        <tr>
         <th>Grade Value</th>
         <td>

          <?php 
       $answers = $exam_result->total_marks / 100;
        //$myanmar = $exam_result->sub_myanmar / $answers;
        // echo $answers;
        // echo "<br>";
        if($answers >= 3.80) :
       ?>
          <h1><span class="badge btn btn-primary btn-lg">A+</span></h1>
          <?php elseif($answers >= 3.50) : ?>
          <h1><span class="badge btn btn-primary btn-lg">A</span></h1>
          <?php elseif($answers >= 3.20) : ?>
          <h1><span class="badge btn btn-primary btn-lg">A-</span></h1>
          <?php elseif($answers >= 2.80) : ?>
          <h1><span class="badge btn btn-primary btn-lg">B+</span></h1>
          <?php elseif($answers >= 2.50) : ?>
          <h1><span class="badge btn btn-primary btn-lg">B</span></h1>
          <?php elseif($answers >= 2.20) : ?>
          <h1><span class="badge btn btn-primary btn-lg">B-</span> </h1>
          <?php elseif($answers >= 1.80) : ?>
          <h1><span class="badge btn btn-primary btn-lg">C+</span> </h1>
          <?php elseif($answers >= 1.50) : ?>
          <h1><span class="badge btn btn-primary btn-lg">C</span></h1>
          <?php elseif($answers >= 1.20) : ?>
          <h1><span class="badge btn btn-primary btn-lg">C-</span> </h1>
          <?php elseif($answers >= 0.80) : ?>
          <h1><span class="badge btn btn-warning btn-lg">D+</span></h1>
          <?php elseif($answers >= 0.50) : ?>
          <h1><span class="badge btn btn-warning btn-lg">D</span></h1>
          <?php elseif($answers >= 0.20) : ?>
          <h1><span class="badge btn btn-warning btn-lg">D-</span>
           <?php else : ?>
           <span class="badge btn btn-danger btn-lg">F</span>
           <?php endif; ?>
         </td>
        </tr>
        <tr>
         <th>Examination Name</th>
         <td><?= $exam_result->exam_name; ?></td>
        </tr>
        <tr>
         <th>Exam Date</th>
         <td><?= $exam_result->exam_date; ?></td>
        </tr>
        <tr>
         <th>Exam Time</th>
         <td><?= $exam_result->exam_time; ?></td>
        </tr>
        <tr>
         <th>Teacher Name</th>
         <td><?= $exam_result->tr_name; ?></td>
        </tr>
        <tr>
         <th>Created At</th>
         <td><?= $exam_result->created_at; ?></td>
        </tr>
        <tr>
         <th>Updated At</th>
         <td><?= $exam_result->updated_at; ?></td>
        </tr>

       </table>
       <?php 
      //  $answers = $exam_result->total_marks / 100;
      //   //$myanmar = $exam_result->sub_myanmar / $answers;
      //   echo $answers;
      //   echo "<br>";
      //   if($answers >= 3.80){
      //     echo "A+";
      //   }elseif($answers >= 3.70){
      //     echo "A";
      //   }elseif($answers >= 3.60){
      //     echo "B+";
      //   }elseif($answers >= 3.50){
      //     echo "B";
      //   }elseif($answers >= 2.40){
      //     echo "C+";
      //   }elseif($answers >= 2.30){
      //     echo "C";
      //   }elseif($answers >= 2.20){
      //     echo "D+";
      //   }elseif($answers >= 2.10){
      //     echo "D";
      //   }else{
      //     echo "F";
      //   }
       ?>
       <div class="card-body">

       </div>
      </div>
     </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Examintion Result Create</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <table class="table">
         <tr>
          <th>name</th>
          <th>mark</th>
         </tr>

        </table>
       </div>

      </div>
     </div>
    </div>
   </main>
   <?php include("includes/footer.php"); ?>
   <?php include("includes/extral_js.php"); ?>

   <script>
   //  $(document).ready(function() {
   //   $('.selectpicker').selectpicker();
   //  });
   $(".selectpicker").selectpicker({
    altField: "#actualDate",
    altFormat: "yyyy-mm-dd"
   });
   </script>