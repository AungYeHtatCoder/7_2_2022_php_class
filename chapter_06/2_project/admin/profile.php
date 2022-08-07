<?php 
   session_start();
    include("function.php");
    $auth = check();
   include("layouts/head.php"); 

   // logined user deatils
   $user_email = $_SESSION['username'];
   //echo $user_email;
   $user_email = $_SESSION['email'];
   //echo "<br>";
   //echo $user_email;
   $user_phone = $_SESSION['phone'];
   //echo "<br>";
   //echo $user_phone;
   $user_adderss = $_SESSION['address'];

   ?>
<?php include("layouts/head.php"); ?>

<body class="sb-nav-fixed">
 <?php include("layouts/top_navbar.php"); ?>
 <div id="layoutSidenav">
  <div id="layoutSidenav_nav">
   <?php include("layouts/sidebar.php"); ?>
  </div>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Profile Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><?php echo $auth; ?></li>
     </ol>
     <?php include("layouts/top_card.php"); ?>
     <div class="row">
      <!-- to add bar area  -->
     </div>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       DataTable Example
      </div>
      <div class="card-body">
       <!-- add to table content -->
      </div>
     </div>
    </div>
   </main>
   <?php include("layouts/footer.php"); ?>