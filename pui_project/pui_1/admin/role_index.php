<?php 
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\RoleTable;

$table = new RoleTable(new MySQL());
$roles = $table->GetRole();


include("includes/head.php"); 
?>

<body class="sb-nav-fixed">
 <?php include("includes/top_header.php"); ?>
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
       DataTable Example
      </div>
      <div class="card-body">
       <!-- Add Datatable -->
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>ID</th>
          <th>Role Name</th>
          <th>Role Value</th>
          <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <?php foreach($roles as $role) : ?>
         <tr>
          <td><?= $role->id; ?></td>
          <td><?= $role->name; ?></td>
          <td><?= $role->value; ?></td>
          <td>
           <a href="role_edit.php?id=<?= $role->id; ?>" class="btn btn-primary">Edit</a>
           <a href="role_delete.php?id=<?= $role->id; ?>" class="btn btn-danger">Delete</a>
         </tr>
         <?php endforeach; ?>
        </tbody>
       </table>
      </div>
     </div>
    </div>
   </main>
   <?php include("includes/footer.php"); ?>