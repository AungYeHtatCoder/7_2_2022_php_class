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
      <li class="breadcrumb-item active"><?php echo $auth->name; ?> : Dashboard</li>
     </ol>

     <?php if(isset($_GET['success']) && $_GET['success'] == true){ ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Role has been updated.
     </div>
     <?php } else if(isset($_GET['error']) && $_GET['error'] == true){ ?>
     <div class="alert alert-danger">
      <strong>Error!</strong> Role has not been updated.
     </div>
     <?php } ?>

     <?php if(isset($_GET['delsuccess'])) : ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Role has been Deleted.
     </div>
     <?php endif; ?>

     <?php if(isset($_GET['addsuccess'])) : ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Role has been Created New Record.
     </div>
     <?php endif; ?>
     <?php //include("includes/top_card.php"); ?>
     <?php //include("includes/bar_chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       <h4>Role List <span class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add
         Role</span></h4>
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
           <?php if($auth->value == '3'){ ?>
           <a href="role_edit.php?id=<?= $role->id; ?>" class="btn btn-primary">Edit</a>
           <?php } ; ?>
           <a href="role_detail.php?id=<?= $role->id; ?>" class="btn btn-info">Show</a>
           <a href="../_actions/role_delete.php?id=<?= $role->id; ?>" class="btn btn-danger">Delete</a>
         </tr>
         <?php endforeach; ?>
        </tbody>
       </table>
      </div>
     </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <form action="../_actions/role_create.php" method="POST">
         <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Role Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Role Name">
         </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Role Value</label>
          <input type="number" name="value" class="form-control" id="exampleInputPassword1">
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