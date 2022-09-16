<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\TrInfoTable;
use Libs\Databases\ProgramTable;
use Libs\Databases\ClassTable;
use Libs\Databases\SubjectTable;
$id = $_GET["id"];
$table = new TrInfoTable(new MySQL());

$tr_info_data = $table->GetTrInfoById($id);

include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php include("includes/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4"> Grade One Teacher Information Update Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"> Update Dashboard </li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Grade One Teacher Information Update <span><a href="g_one_tr_index.php" class="btn btn-outline-info">Back To
         Dashboard</a></span>
      </div>
      <div class="card-body">
       <!-- add to datatable -->
       <form action="../_actions/g_one_tr_update.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
         <label for="TeacherName" class="form-label">TeacherName</label>
         <input type="text" name="tr_name" class="form-control" value="<?= $tr_info_data->tr_name ?>">
        </div>
        <div class="mb-3">
         <label for="Phone" class="form-label">Phone</label>
         <input type="text" name="phone" class="form-control" value="<?= $tr_info_data->phone ?>">
        </div>
        <div class="mb-3">
         <label for="SecondaryPhone" class="form-label">SecondaryPhone</label>
         <input type="text" name="secondary_phone" class="form-control" value="<?= $tr_info_data->secondary_phone ?>">
        </div>
        <div class="form-floating">
         <textarea name="address" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px"><?= $tr_info_data->address ?></textarea>
         <label for="floatingTextarea2">Address</label>
        </div>

        <div class="form-floating">
         <textarea name="fix_address" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px"><?= $tr_info_data->fix_address ?></textarea>
         <label for="floatingTextarea2">Fixed Address</label>
        </div>

        <div class="form-floating">
         <textarea name="experience" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px"><?= $tr_info_data->experience ?></textarea>
         <label for="floatingTextarea2">Learning Experience</label>
        </div>
        <div class="mb-3">
         <label for="AcademicYear" class="form-label">AcademicYear</label>
         <input type="text" name="academic_year" class="form-control" value="<?= $tr_info_data->academic_year ?>">
        </div>
        <select name="program_id" class="form-select mt-3" aria-label="Default select example">
         <option selected>Select Program</option>
         <?php
         $table = new ProgramTable(new MySQL());
         $program_data = $table->GetProgramAllData();
         foreach ($program_data as $program) {
          if ($program->id == $tr_info_data->program_id) {
           echo "<option value='$program->id' selected>$program->program_name</option>";
          } else {
           echo "<option value='$program->id'>$program->program_name</option>";
          }
         }
         ?>

        </select>

        <select name="class_id" class="form-select mt-3" aria-label="Default select example">
         <option selected>Select Class</option>
         <?php
         $table = new ClassTable(new MySQL());
         $class_data = $table->GetClassAllData();
         foreach ($class_data as $class) {
          if ($class->id == $tr_info_data->class_id) {
           echo "<option value='$class->id' selected>$class->class_name</option>";
          } else {
           echo "<option value='$class->id'>$class->class_name</option>";
          }
         }
         ?>
        </select>

        <select name="subject_id" class="form-select mt-3" aria-label="Default select example">
         <option selected>Select Subject</option>
         <?php
         $table = new SubjectTable(new MySQL());
         $subject_data = $table->GetSubjectAllData();
         foreach ($subject_data as $subject) {
          if ($subject->id == $tr_info_data->subject_id) {
           echo "<option value='$subject->id' selected>$subject->subject_name</option>";
          } else {
           echo "<option value='$subject->id'>$subject->subject_name</option>";
          }
         }
         ?>
        </select>
        <input type="hidden" name="user_id" value="<?= $auth->id; ?>">
        <div class="modal-footer">
         <a href="tr_info_index.php" class="btn btn-outline-info">Back</a>
         <button type="submit" class="btn btn-primary">Update Tr Info</button>
        </div>
       </form>
      </div>
     </div>

    </div>
   </main>
   <?php include("includes/footer.php"); ?>