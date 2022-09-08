<?php include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_header.php"); ?>
 <div id="layoutSidenav">
  <?php include("includes/sidebar.php"); ?>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <?php //include("includes/bar_chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Role Details
      </div>
      <div class="card-body">
       <?php 
       include("../vendor/autoload.php");
       use Libs\Databases\MySQL;
       use Libs\Databases\RoleTable;

       $table = new RoleTable(new MySQL());
       $id = $_GET['id'];
       $role = $table->ShowById($id);
       ?>
       <!-- Add Datatable -->
       <table class="table table-primary">
        <tr>
         <th>ID</th>
         <td><?= $role->id ?></td>
        </tr>
        <tr class="table-secondary">
         <th>Role Name</th>
         <td><?= $role->name ?></td>
        </tr>
        <tr class="table-light">
         <th>Role Value</th>
         <td><?= $role->value ?></td>
        </tr>
       </table>
      </div>
     </div>
    </div>
   </main>
   <?php include("includes/footer.php"); ?>