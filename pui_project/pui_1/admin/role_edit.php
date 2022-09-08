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
       Update Role
      </div>
      <div class="card-body">
       <!-- Add Datatable -->
       <?php 

       include("../vendor/autoload.php");
       use Libs\Databases\MySQL;
       use Libs\Databases\RoleTable;
       $table = new RoleTable(new MySQL());
       // get the role id from the url
       $id = $_GET['id'];
       $role = $table->GetRoleById($id);
       // echo "<pre>";
       // print_r($role);
       // echo "</pre>";
       ?>
       <form action="../_actions/role_update.php" method="post">
        <input type="hidden" name="id" value="<?= $role->id ?>">
        <div class="form-group">
         <label for="name">Role Name</label>
         <input type="text" class="form-control" id="name" name="name" value="<?= $role->name; ?>">
        </div>
        <div class="form-group">
         <label for="value">Role Value</label>
         <input type="text" class="form-control" id="value" name="value" value="<?= $role->value; ?>">
        </div>
        <div class="form-group mt-5">
         <input type="submit" class="btn btn-primary" value="Role Update">
        </div>
       </form>
      </div>
     </div>
    </div>
   </main>
   <?php include("includes/footer.php"); ?>