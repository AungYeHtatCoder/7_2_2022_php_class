<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\StudentTable;

$id = $_GET['id'];
$table = new StudentTable(new MySQL());
$kg_student_infos = $table->GetStudentDataById($id);

$download_file = $table->DownloadPdfFile($id);
include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php include("includes/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Registed KG Student Information Details Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">KG Student Dashboard</li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <span><a class="btn btn-primary" href="kg_st_info_index.php">Back</a></span>
       <i class="fas fa-table me-1"></i>
       Registed KG Student Information Details
      </div>
      <div class="card-body">
       <!-- add to datatable -->
       <table class="table">
        <tr>
         <th>ID</th>
         <td><?= $kg_student_infos->id; ?></td>
        </tr>
        <tr>
         <th>User Account Name</th>
         <td><?= $kg_student_infos->name; ?></td>
        </tr>
        <tr>
         <th>Updated Name</th>
         <td><?= $kg_student_infos->student_name; ?>
         </td>
        </tr>
        <tr>
         <th>Email</th>
         <td><?= $kg_student_infos->email; ?></td>
        </tr>
        <tr>
         <th>Address</th>
         <td><?= $kg_student_infos->address; ?></td>
        </tr>
        <tr>
         <th>Phone</th>
         <td><?= $kg_student_infos->phone; ?></td>
        </tr>
        <tr>
         <th>Academic Year</th>
         <td><?= $kg_student_infos->academic_year; ?></td>
        </tr>
        <tr>
         <th>Class</th>
         <td><?= $kg_student_infos->class_name; ?>
          <span>
         <th>Class Code </th>
         <td><?= $kg_student_infos->class_code; ?></td>
         </span>
         </td>
        </tr>
        <tr>

         <?php 
          
        //  $pdf_file_name = $pdf_file->attach_file;
        //  $folder_name = "../_actions/uploads/";
        //  $file_path = $folder_name.$pdf_file_name;
         
        //  if($pdf_file_name == null){
        //   echo "<td> No pdf file </td>";
        //  }elseif($pdf_file_name !== null){
        //   echo "<td><a class='btn btn-primary' href='../_actions/uploads?id=$pdf_file->id'>$pdf_file_name</a></td>";
        //  }
        //  else{
        //   echo "not found";
        //  }
         // echo "<td><a class='btn btn-primary' href='../_actions/uploads?id=$pdf_file->id'>$pdf_file_name</a></td>";
         
         ?>
        </tr>
        <tr>
         <th>pdf file</th>
         <td>
          <?php
         $pdf_file = $table->ReadPdfFile($id);
         ?>
          <a class="btn btn-outline-primary" href="../_actions/uploads/<?= $pdf_file->attach_file ?>"
           target="_blank">View File</a>
         </td>
        </tr>
       </table>
      </div>
     </div>
     <div class="card">
      <div class="card-body">
       <?php 
           // read the pdf file from the database
           // if ($kg_student_infos->attach_file) {
           //  echo '<embed src="../_actions/uploads/data:application/pdf;base64,' . base64_encode($kg_student_infos->attach_file) . '" type="application/pdf" width="100%" height="600px" />';
           // } else {
           //  echo '<p>No file found</p>';
           // }
           ?>

       <embed type="application/pdf" src="../_actions/uploads/<?= $pdf_file->attach_file; ?>" width="500" height="375">

       <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="../_actions/uploads/<?= $pdf_file->attach_file; ?>"></iframe>
       </div>
      </div>
     </div>
    </div>
   </main>
   <?php include("includes/footer.php"); ?>

   <?php 
   /* 
   <td><a href='../_actions/uploads?file=$download_file->attach_file'>Download</a></td>
   */
  ?>