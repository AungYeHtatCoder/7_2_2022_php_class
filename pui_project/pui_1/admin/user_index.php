<?php 
//session_start();

include("../vendor/autoload.php");
          use Libs\Databases\MySQL;
          use Libs\Databases\UsersTable;
          use Helpers\Auth;
          //$auth = Auth::check();
          $table = new UsersTable(new MySQL());
          $users = $table->GetAllUserData();

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
     <div class="row">
      <div class="col-xl-3 col-md-6">
       <div class="card bg-primary text-white mb-4">
        <div class="card-body">Total Users</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
         <p class="small text-white text-center stretched-link" href="#"><?php echo count($users) ?></p>
         <div class="small text-white"></div>
        </div>
       </div>
      </div>
     </div>
     <?php //include("includes/top_card.php"); ?>
     <?php //include("includes/bar_chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       User List
      </div>
      <div class="card-body">
       <!-- Add Datatable -->
       <div class="table-responsive">
        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
         <thead>
          <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Role</th>
           <th>Action</th>
          </tr>
         </thead>
         <tfoot>
          <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Role</th>
           <th>Action</th>
          </tr>
         </tfoot>
         <tbody>
          <?php 
          
          foreach($users as $user): ?>
          <tr>
           <td><?= $user->name ?></td>
           <td><?= $user->email ?></td>
           <td>
            <?php if ($user->value === '1') : ?>
            <span class="badge bg-secondary">
             <?= $user->role ?>
            </span>
            <?php elseif ($user->value === '2') : ?>
            <span class="badge bg-primary">
             <?= $user->role ?>
            </span>
            <?php else : ?>
            <span class="badge bg-success">
             <?= $user->role ?>
            </span>
            <?php endif ?>
           </td>

           <td>
            <?php if ($auth->value > 1) : ?>
            <div class="btn-group dropdown">
             <a href="#" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
              Change Role
             </a>
             <div class="dropdown-menu dropdown-menu-dark">
              <a href="_actions/role.php?id=<?= $user->id ?>&role=1" class="dropdown-item">User</a>
              <a href="../_actions/role.php?id=<?= $user->id ?>&role=2" class="dropdown-item">Manager</a>
              <a href="../_actions/role.php?id=<?= $user->id ?>&role=3" class="dropdown-item">Admin</a>
             </div>

             <?php if ($user->suspended) : ?>
             <a href="../_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-danger">Suspended</a>
             <?php else : ?>
             <a href="../_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-success">Active</a>
             <?php endif ?>

             <?php if ($user->id !== $auth->id) : ?>
             <a href="../_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-danger"
              onClick="return confirm('Are you sure?')">Delete</a>
             <?php endif ?>
            </div>
            <?php else : ?>
            ###
            <?php endif ?>
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

   <?php
/*
<td>
            <a href="user_edit.php?id=<?= $user->id ?>" class="btn btn-primary">Edit</a>
   <a href="user_delete.php?id=<?= $user->id ?>" class="btn btn-danger">Delete</a>
   </td>
   */
   ?>