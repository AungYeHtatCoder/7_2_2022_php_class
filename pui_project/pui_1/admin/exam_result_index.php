<?php 
include("includes/head.php"); 
include("includes/extral_head.php"); 
include("../vendor/autoload.php");

use Libs\Databases\MySQL;
use Libs\Databases\StudentTable;
use Libs\Databases\ClassTable;
use Libs\Databases\TrInfoTable;
use Libs\Databases\ExamintionTable;
use Libs\Databases\ProgramTable;
use Libs\Databases\ExamResultTable;

$program_data = new ProgramTable(new MySQL());
$programs = $program_data->GetProgramAllData();

$table = new StudentTable(new MySQL());
$students = $table->GetAllStudentData();

$class_data = new ClassTable(new MySQL());
$classes = $class_data->GetClassAllData();

$tr_info = new TrInfoTable(new MySQL());
$tr_infos_data = $tr_info->GetTrInfoAllData();

$exam_name = new ExamintionTable(new MySQL());
$exam_names = $exam_name->GetExamination();

$exam_result = new ExamResultTable(new MySQL());
$exam_results = $exam_result->GetExamResultAllData();
//$totals = $exam_result->GetTotalMarks();
// echo "<pre>";
// print_r($exam_results);
// echo "</pre>";




?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_header.php"); ?>
 <div id="layoutSidenav">
  <?php include("includes/sidebar.php"); ?>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4"> Examintion Result Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><?php echo $auth->name; ?> : Examintion Result Dashboard</li>
     </ol>

     <?php if(isset($_GET['success']) && $_GET['success'] == true){ ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Examintion Result has been Created.
     </div>
     <?php } else if(isset($_GET['error']) && $_GET['error'] == true){ ?>
     <div class="alert alert-danger">
      <strong>Error!</strong> Examintion Result has not been Created.
     </div>
     <?php } ?>


     <?php if(isset($_GET['success_delete'])) : ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Examintion Result has been Deleted.
     </div>
     <?php endif; ?>

     <?php if(isset($_GET['addsuccess'])) : ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Examintion Result has been Created New Record.
     </div>
     <?php endif; ?>


     <?php if(isset($_GET['success_update'])) : ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Examintion Result has been Updated.
     </div>
     <?php endif; ?>


     <?php //include("includes/top_card.php"); ?>
     <?php //include("includes/bar_chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       <h4>Examintion Result List <span class="btn btn-outline-primary" data-bs-toggle="modal"
         data-bs-target="#exampleModal">+
         Add
         Examintion Result</span></h4>
      </div>
      <div class="card-body">
       <!-- Add Datatable -->
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>Student Name</th>
          <th>Class Name</th>
          <th>Program Name</th>
          <th>Exam Name</th>
          <th>Total Mark</th>
          <th>Grade Value</th>

          <th>Actions</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <?php foreach($exam_results as $result) : ?>
          <?php 
              $myanmar = $result->sub_myanmar;
              $english = $result->sub_eng;
              $math = $result->sub_math;
              $science = $result->sub_scient;
              $geo = $result->sub_geo;
              $history = $result->sub_history;
              $totals = $myanmar + $english + $math + $science + $geo + $history;
              $grade = $totals / 100;
              ?>
          <td><?php echo $result->student_name; ?></td>
          <td><?php echo $result->class_name; ?></td>
          <td><?php echo $result->program_name; ?></td>
          <td><?php echo $result->exam_name; ?></td>
          <td><?php echo $totals; ?></td>
          <td><?php if($grade >=4.0) : ?>
           <span class="badge bg-success">A+</span>
           <?php elseif($grade >=3.75) : ?>
           <span class="badge bg-success">A</span>
           <?php elseif($grade >=3.50) : ?>
           <span class="badge bg-success">A-</span>
           <?php elseif($grade >=3.25) : ?>
           <span class="badge bg-success">B+</span>
           <?php elseif($grade >=3.0) : ?>
           <span class="badge bg-success">B</span>
           <?php elseif($grade >=2.75) : ?>
           <span class="badge bg-success">B-</span>
           <?php elseif($grade >=2.50) : ?>
           <span class="badge bg-success">C+</span>
           <?php elseif($grade >=2.25) : ?>
           <span class="badge bg-success">C</span>
           <?php elseif($grade >=2.0) : ?>
           <span class="badge bg-success">C-</span>
           <?php elseif($grade >=1.75) : ?>
           <span class="badge bg-success">D+</span>
           <?php elseif($grade >=1.50) : ?>
           <span class="badge bg-success">D</span>
           <?php elseif($grade >=1.25) : ?>
           <span class="badge bg-success">D-</span>
           <?php elseif($grade >=1.0) : ?>
           <span class="badge bg-success">E</span>
           <?php else : ?>
           <span class="badge bg-danger">F</span>

           <?php endif; ?>

          </td>


          <td>
           <a href="exam_result_view.php?id=<?php echo $result->id; ?>" class="btn btn-outline-primary">View</a>
           <a href="exam_result_edit.php?id=<?php echo $result->id; ?>" class="btn btn-outline-success">Edit</a>
           <a href="../_actions/exam_result_delete.php?id=<?php echo $result->id; ?>"
            class="btn btn-outline-danger">Delete</a>
          </td>
         </tr>
         <?php endforeach; ?>
        </tbody>
       </table>
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
        <form action="../_actions/exam_result_create.php" method="POST">
         <div class="mb-3">
          <select name="program_id" class="selectpicker col-12" data-size="7" data-style="btn btn-primary btn-round"
           title="Single Select">
           <option disabled selected>Program Name</option>
           <?php
           foreach($programs as $program) :
            
           ?>
           <option value="<?= $program->id; ?>"><?= $program->program_name; ?></option>
           <?php endforeach; ?>
          </select>
         </div>
         <div class=" mb-3">
          <select name="student_id" class="selectpicker col-12" data-size="7" data-style="btn btn-primary btn-round"
           title="Single Select">
           <option disabled selected>Student Name</option>
           <?php
           foreach($students as $student) :
            if($student->class_code == 001) :
           ?>
           <option value="<?= $student->id ?>"><?= $student->student_name; ?></option>
           <?php endif; endforeach; ?>
          </select>
         </div>

         <div class="mb-3">
          <select name="class_id" class="selectpicker col-12" data-size="7" data-style="btn btn-primary btn-round"
           title="Single Select">
           <option disabled selected>Class Name</option>

           <?php 
           foreach($classes as $class) :
            
           ?>
           <option value="<?= $class->id ?>"><?= $class->class_name; ?></option>
           <?php endforeach; ?>
          </select>
         </div>
         <div class="form-group">
          <label for="exampleEmail" class="bmd-label-floating">Myanmar Mark</label>
          <input type="number" name="sub_myanmar" class="form-control" id="exampleEmail">
         </div>
         <div class="form-group">
          <label for="examplePass" class="bmd-label-floating">English Mark</label>
          <input type="number" name="sub_eng" class="form-control" id="examplePass">
         </div>
         <div class="form-group">
          <label for="exampleEmail" class="bmd-label-floating">Math Mark</label>
          <input type="number" name="sub_math" class="form-control" id="exampleEmail">
         </div>
         <div class="form-group">
          <label for="examplePass" class="bmd-label-floating">Scient Mark</label>
          <input type="number" name="sub_scient" class="form-control" id="examplePass">
         </div>
         <div class="form-group">
          <label for="exampleEmail" class="bmd-label-floating">Geo Mark</label>
          <input type="number" name="sub_geo" class="form-control" id="exampleEmail">
         </div>
         <div class="form-group">
          <label for="examplePass" class="bmd-label-floating">History Mark</label>
          <input type="number" name="sub_history" class="form-control" id="examplePass">
         </div>

         <div class="mb-3">
          <select name="examination_id" class="selectpicker col-12" data-size="7" data-style="btn btn-primary btn-round"
           title="Single Select">
           <option disabled selected>Examination Name</option>
           <?php foreach($exam_names as $exam) : ?>
           <option value="<?= $exam->id ?>"><?= $exam->exam_name; ?></option>
           <?php endforeach; ?>
          </select>
         </div>
         <div class="mb-3">
          <div class="card ">
           <div class="card-header card-header-rose card-header-text">
            <div class="card-icon">
             <i class="material-icons">library_books</i>
            </div>
            <h4 class="card-title">Exam Date</h4>
           </div>
           <div class="card-body ">
            <div class="form-group">
             <input name="exam_date" type="text" class="form-control datepicker" id="actualDate">
            </div>
           </div>
          </div>
          <div class="mb-3">
           <div class="card ">
            <div class="card-header card-header-rose card-header-text">
             <div class="card-icon">
              <i class="material-icons">av_timer</i>
             </div>
             <h4 class="card-title">Exam Time </h4>
            </div>
            <div class="card-body ">
             <div class="form-group">
              <input name="exam_time" type="text" class="form-control timepicker" value="10/05/2016">
             </div>
            </div>
           </div>
           <div class="mb-3">
            <label for="examplePass" class="bmd-label-floating">Academic Year</label>
            <input name="academic_year" type="text" class="form-control" id="examplePass">
           </div>
           <div class="mb-3">
            <select name="tr_infos_id" class="selectpicker col-12" data-size="7" data-style="btn btn-primary btn-round"
             title="Single Select">
             <option disabled selected>Teacher ID</option>
             <?php 
             foreach($tr_infos_data as $teacher) :
              if($teacher->class_code == 001) :
             ?>
             <option value="<?= $teacher->id ?>"><?= $teacher->tr_name; ?></option>
             <?php endif; endforeach; ?>
            </select>
           </div>
          </div>
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Create New Role">
         </div>
        </form>
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