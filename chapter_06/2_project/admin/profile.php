<?php 
  // session_start();
    include("config/db_con.php");

    include("function.php");
    $auth = check();
   include("layouts/head.php"); 

   

   $user_id = $_SESSION['id'];

   $user_email = $_SESSION['username'];
   //echo $user_email;
   $user_email = $_SESSION['email'];
   //echo "<br>";
   //echo $user_email;
   $user_phone = $_SESSION['phone'];
   //echo "<br>";
   //echo $user_phone;
   $user_adderss = $_SESSION['address'];
   $photo = $_SESSION['photo'];


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
       User Details
      </div>
      <div class="card-body">
       <!-- add to table content -->
       <table class="table">
        <tr>
         <th>ID</th>
         <td><?php echo $user_id; ?></td>
        </tr>
        <tr>
         <th>Name</th>
         <td><?php echo $auth; ?></td>
        </tr>
        <tr>
         <th>Email</th>
         <td><?php echo $user_email; ?></td>
        </tr>
        <tr>
         <th>Phone</th>
         <td><?php echo $user_phone; ?></td>
        </tr>
        <tr>
         <th>Address</th>
         <td><?php echo $user_adderss; ?></td>
        </tr>

       </table>
      </div>
      <card class="mb-4">
       <?php 
        include("config/db_con.php");
        // get profile image from the database
        $id = $user_id;
        $deatil = $link->query("SELECT * FROM users WHERE id = '$id'");
        $row = $deatil->fetch_assoc();
        ?>
       <div class="profile">
        <div class="avatar">
         <img src="actions/images/<?php echo $row['photo']; ?>" alt="Circle Image"
          class="img-raised rounded-circle img-fluid" width="200px" height="200px">
        </div>
        <div class="name">
         <h3 class="title"><?php echo $auth ?></h3>
         <h6>Designer</h6>
         <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
         <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
         <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
        </div>
       </div>
      </card>
      <div class="card mb-4">

       <?php if (isset($_GET['error'])) : ?>
       <div class="alert alert-warning">
        Cannot upload file
       </div>
       <?php endif ?>
       <div class="col-lg-4">
        <div class="card-body">
         <form action="actions/profile_update.php" method="post" enctype="multipart/form-data">
          <!-- <div class="input-group mb-3">
           <label for="password">Password</label>
           <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div> -->
          <input type="hidden" name="id" value="<?php echo $user_id; ?>">
          <div class="input-group mb-3">
           <input type="file" name="photo" class="form-control">

          </div>
          <div class="input-group mb-3">
           <input type="submit" class="btn btn-primary" name="upload" value="Upload">
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
   </main>
   <?php include("layouts/footer.php"); 
   /*
<div class="card-header">

        <i class="fas fa-table me-1"></i>
        Update Profile <span><img src="actions/images/<?php //echo $row['photo']; ?>" width="100px" height="100px"
   alt=""></span>
  </div>

  */

  ?>