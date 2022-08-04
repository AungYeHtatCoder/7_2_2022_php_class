<?php require("layout/head.php"); ?>

<body class="sb-nav-fixed">
 <!-- top - nav -->
 <?php require("layout/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php require("layout/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Upload Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <div class="row">



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