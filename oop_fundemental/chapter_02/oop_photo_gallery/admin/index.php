<?php require("layout/head.php"); ?>

<body class="sb-nav-fixed">
 <!-- top - nav -->
 <?php require("layout/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php require("layout/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Admin Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <div class="row">
      <div class="col-xl-3 col-md-6">
       <div class="card bg-primary text-white mb-4">
        <div class="card-body">Primary Card</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
         <a class="small text-white stretched-link" href="#">View Details</a>
         <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
       </div>
      </div>
      <div class="col-xl-3 col-md-6">
       <div class="card bg-warning text-white mb-4">
        <div class="card-body">Warning Card</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
         <a class="small text-white stretched-link" href="#">View Details</a>
         <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
       </div>
      </div>
      <div class="col-xl-3 col-md-6">
       <div class="card bg-success text-white mb-4">
        <div class="card-body">Success Card</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
         <a class="small text-white stretched-link" href="#">View Details</a>
         <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
       </div>
      </div>
      <div class="col-xl-3 col-md-6">
       <div class="card bg-danger text-white mb-4">
        <div class="card-body">Danger Card</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
         <a class="small text-white stretched-link" href="#">View Details</a>
         <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
       </div>
      </div>
     </div>
     <div class="row">
      <!-- bar code -->
     </div>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       DataTable Example
      </div>
      <div class="card-body">
       <!-- datatable -->
       <?php
       include("layout/init.php");
       // db check
       // if ($database->connection) {
       //  echo "connection";
       // }

       // query check
       $sql = "SELECT * FROM users WHERE id = 1";
       $result = $database->query($sql);
       $user_found = mysqli_fetch_array($result);
       echo $user_found['username'];
       ?>
      </div>
     </div>
    </div>
   </main>
   <?php require("layout/footer.php"); ?>
  </div>
 </div>
 <?php require("layout/js.php"); ?>
</body>

</html>