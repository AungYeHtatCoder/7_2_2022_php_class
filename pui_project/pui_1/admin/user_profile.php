<?php 
include("../vendor/autoload.php");

use Helpers\Auth;

//$auth = Auth::check();

?>
<?php include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_header.php"); ?>
 <div id="layoutSidenav">
  <?php include("includes/sidebar.php"); ?>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">User Profile Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
       <?php 
      if($auth->value == '1'){
                echo $auth->name;
              }elseif($auth->value == '2'){

                echo $auth->name;
              }elseif($auth->value == '3'){
                echo $auth->name;
              }
      ?>
      </li>
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
              <h4><?php 
              if($auth->value == '1'){
                echo $auth->name;
              }elseif($auth->value == '2'){

                echo $auth->name;
              }elseif($auth->value == '3'){
                echo $auth->name;
              }
              ?></h4>
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


             <div class="row mt-3">
              <div class="col-sm-3">
               <h6 class="mb-0 badge bg-secondary">Change Password</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               <form action="../_actions/change_pw.php" method="POST">
                <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email address</label>
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" value="<?php echo $auth->email; ?>">
                 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Password</label>
                 <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                  value="<?php //echo $auth->password; ?>" placeholder="Enter Your Change Password">
                </div>
                <div class="mb-3">
                 <input type="submit" class="btn btn-primary" value="Update Password">
                </div>
               </form>
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