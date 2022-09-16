<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\TrInfoTable;
$id = $_GET['id'];
$table = new TrInfoTable(new MySQL());
$teachers = $table->GetTrInfoDetail($id);
include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php include("includes/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Registed Teacher Information Details Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Registed Teacher Information Details
      </div>
      <div class="card-body">
       <!-- add to datatable -->
       <table class="table">
        <tr>
         <th>ID</th>
         <td><?= $teachers->id; ?></td>
        </tr>
        <tr>
         <th>User Account Name</th>
         <td><?= $teachers->name; ?></td>
        </tr>
        <tr>
         <th>Updated Name</th>
         <td><?= $teachers->tr_name; ?>
         </td>
        </tr>
        <tr>
         <th>Email</th>
         <td><?= $teachers->email; ?></td>
        </tr>

        <tr>
         <th>Address</th>
         <td><?= $teachers->address; ?></td>
        </tr>
        <tr>
         <th>Phone</th>
         <td><?= $teachers->phone; ?></td>
        </tr>

        <tr>
         <th>Secondary Phone</th>
         <td><?= $teachers->secondary_phone; ?></td>
        </tr>
        <tr>
         <th>Experience </th>
         <td><?= $teachers->experience; ?></td>
        </tr>
        <tr>
         <th>Academic Year</th>
         <td><?= $teachers->academic_year; ?></td>
        </tr>
        <tr>
         <th>Program</th>
         <td><?= $teachers->program_name; ?></td>
        </tr>
        <tr>
         <th>Class</th>
         <td><?= $teachers->class_name; ?>
          <span>
         <th>Class Code </th>
         <td><?= $teachers->class_code; ?></td>
         </span>
         </td>
        </tr>
        <tr>
         <th>Subject</th>
         <td><?= $teachers->subject_name; ?>

         </td>
         <th>Subject Code </th>
         <td><?= $teachers->subject_code; ?></td>
        </tr>
       </table>
      </div>
     </div>

    </div>
   </main>
   <?php include("includes/footer.php"); ?>