<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\TrInfoTable;
$id = $_GET['id'];
$table = new TrInfoTable(new MySQL());
$g_one_tr_details = $table->GetTrInfoDetail($id);
include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php include("includes/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4"> Grade One Teacher Information Details Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Details Dashboard</li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Grade One Teacher Information Details
      </div>
      <!-- profile image -->
      <div class="card mt-3 mx-auto" style="width: 18rem;">
       <img src="../_actions/photos/<?= $g_one_tr_details->photo; ?>" class="card-img-top" alt="...">
       <div class="card-body">
        <p class="card-text text-center"><strong><?= $g_one_tr_details->tr_name; ?></strong></p>
       </div>
      </div>
      <!-- profile image end -->

      <div class="card-body">
       <!-- add to datatable -->
       <a href="g_one_tr_index.php" class="btn btn-outline-primary">Back To Dashboad</a>
       <table class="table">
        <tr>
         <th>ID</th>
         <td><?= $g_one_tr_details->id; ?></td>
        </tr>
        <tr>
         <th>Account Name</th>
         <td><?= $g_one_tr_details->name; ?></td>
        </tr>
        <tr>
         <th>Tr Name</th>
         <td><?= $g_one_tr_details->tr_name; ?></td>
        </tr>
        <tr>
         <th>Tr Email</th>
         <td><?= $g_one_tr_details->email; ?></td>
        </tr>
        <tr>
         <th>Class</th>
         <td><?= $g_one_tr_details->class_name; ?></td>
        </tr>
        <tr>
         <th>Subject</th>
         <td><?= $g_one_tr_details->subject_name; ?></td>
        </tr>
        <tr>
         <th>Tr Image</th>
         <td><img src="../_actions/photos/<?= $g_one_tr_details->photo; ?>" alt="" width="70px" height="70px"></td>
        </tr>
        <tr>
         <th>Tr Phone</th>
         <td><?= $g_one_tr_details->phone; ?></td>
        </tr>
        <tr>
         <th>Tr Secondary Phone</th>
         <td><?= $g_one_tr_details->secondary_phone; ?></td>
        </tr>
        <tr>
         <th>Tr Address</th>
         <td><?= $g_one_tr_details->address; ?></td>
        </tr>
        <tr>
         <th>Tr Fixed Address</th>
         <td><?= $g_one_tr_details->fix_address; ?></td>
        </tr>
        <tr>
         <th>Program</th>
         <td><?= $g_one_tr_details->program_name; ?></td>
        </tr>
        <tr>
         <th>Class</th>
         <td><?= $g_one_tr_details->class_name; ?></td>
         <th>Class code</th>
         <td><?= $g_one_tr_details->class_code; ?></td>
        </tr>
        <tr>
         <th>Subject</th>
         <td><?= $g_one_tr_details->subject_name; ?></td>
         <th>Subject code</th>
         <td><?= $g_one_tr_details->subject_code; ?></td>
        </tr>

       </table>
      </div>
     </div>

    </div>
   </main>
   <?php include("includes/footer.php"); ?>