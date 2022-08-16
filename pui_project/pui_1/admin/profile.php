<?php 
include("../vendor/autoload.php");

use Helpers\Auth;

$auth = Auth::check();

?>
<?php include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php include("includes/top_header.php"); ?>
 <div id="layoutSidenav">
  <?php include("includes/sidebar.php"); ?>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Profile Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><?= $auth->name ?></li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <?php //include("includes/bar_chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       User Details
      </div>
      <div class="card-body">
       <!-- Add Datatable -->

      </div>
      <div class="container">
       <div class="main-body">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
         <ol class="breadcrumb">

          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
         </ol>
        </nav>
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
         <div class="col-md-4 mb-3">
          <div class="card">
           <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
             <img src="../_actions/photos/<?= $auth->photo ?>" alt="Profile Photo" width="200" alt="Admin"
              class="rounded-circle" width="150">
             <div class="mt-3">
              <h4><?= $auth->name ?></h4>
              <p class="text-secondary mb-1">Full Stack Developer</p>
              <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
              <form action="../_actions/user_update.php" method="POST" enctype="multipart/form-data">
               <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <input type="file" class="from-control" name="photo">
               </div>
               <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <input type="submit" value="Update Profile" class="btn btn-primary">
               </div>
              </form>
             </div>
            </div>
           </div>
          </div>

         </div>
         <div class="col-md-8">
          <div class="card mb-3">
           <div class="card-body">
            <div class="row">
             <div class="col-sm-3">
              <h6 class="mb-0">Full Name</h6>
             </div>
             <div class="col-sm-9 text-secondary">
              <?= $auth->name; ?>
             </div>
            </div>
            <hr>
            <div class="row">
             <div class="col-sm-3">
              <h6 class="mb-0">Email</h6>
             </div>
             <div class="col-sm-9 text-secondary">
              <?= $auth->email; ?>
             </div>
            </div>
            <hr>
            <div class="row">
             <div class="col-sm-3">
              <h6 class="mb-0">Phone</h6>
             </div>
             <div class="col-sm-9 text-secondary">
              <?= $auth->phone; ?>


             </div>
             <hr>

             <hr>
             <div class="row">
              <div class="col-sm-3">
               <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               <?= $auth->address; ?>

              </div>
              <hr>

             </div>
            </div>





           </div>
          </div>

         </div>
        </div>
       </div>
      </div>
   </main>
   <?php include("includes/footer.php"); ?>