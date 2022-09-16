<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\TrInfoTable;
use Helpers\Auth;

$table = new TrInfoTable(new MySQL());
$teachers = $table->GetTrInfoAllData();
include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php include("includes/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Registed Teacher Information Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Registed Teacher Information
      </div>
      <div class="card-body">
       <!-- add to datatable -->
       <table id="datatablesSimple">
        <thead>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Role</th>
         <th>Action</th>
        </thead>
        <tbody>
         <?php 
         // foreach loop with equal role value
         foreach($teachers as $info): 
          
         ?>
         <tr>
          <td><?= $info->id; ?></td>
          <td><?= $info->tr_name; ?></td>
          <td><?= $info->email; ?></td>
          <td><?= $info->program_name; ?></td>
          <td>
           <a href="tr_info_edit.php?id=<?= $info->id; ?>" class="btn btn-outline-primary">Edit</a>
           <a href="tr_info_detail.php?id=<?= $info->id; ?>" class="btn btn-outline-warning">Detail</a>
           <a href="../_actions/tr_info_delete.php?id=<?= $info->id; ?>" class="btn btn-outline-danger">Delete</a>
          </td>
         </tr>
         <?php endforeach; ?>

        </tbody>
       </table>
      </div>
     </div>

    </div>
   </main>
   <?php include("includes/footer.php"); ?>