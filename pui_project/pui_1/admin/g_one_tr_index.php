<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\TrInfoTable;

$table = new TrInfoTable(new MySQL());
$g_one_tr = $table->GetTrInfoAllData();


include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php include("includes/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4"> Grade One Teacher Information Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Grade One Teacher Information <span>
        <h4>
         <?php 
       echo count($g_one_tr);
       ?>
        </h4>
       </span>
      </div>
      <div class="card-body">
       <!-- add to datatable -->
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>ID</th>
          <th>Account Name</th>
          <th>Tr Name</th>
          <th>Tr Email</th>
          <th>Class</th>
          <th>Subject</th>
          <!-- <th>Teacher Phone</th>
          <th>Teacher Address</th> -->
          <th>Tr Image</th>
          <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <?php foreach($g_one_tr as $tr) : 
          if($tr->class_code == 001):
            //echo "Grade One Total Teacher" . count($tr);
          ?>
         <tr>
          <td><?= $tr->id; ?></td>
          <td><?= $tr->name; ?></td>
          <td><?= $tr->tr_name; ?></td>
          <td><?= $tr->email; ?></td>
          <td><?= $tr->class_name; ?></td>
          <td><?= $tr->subject_name; ?></td>
          <td><img src="../_actions/photos/<?= $tr->photo; ?>" alt="" width="70px" height="70px"></td>
          <td>
           <a href="g_one_tr_detail.php?id=<?= $tr->id; ?>" class="btn btn-warning"><i
             class="fa-solid fa-users-viewfinder"></i></a>
           <a href="g_one_tr_edit.php?id=<?= $tr->id; ?>" class="btn btn-primary"><i
             class="fa-solid fa-user-pen"></i></a>
           <a href="../_actions/g_one_tr_delete.php?id=<?= $tr->id; ?>" class="btn btn-danger"><i
             class="fa-solid fa-user-minus"></i></a>
         </tr>
         <?php endif; endforeach; ?>
        </tbody>
       </table>
      </div>
     </div>

    </div>
   </main>
   <?php include("includes/footer.php"); ?>