<?php include("layout/head.php") ?>

<body id="home" style="background-color: rgb(78, 44, 21)">
 <!-- nav start -->
 <?php include("layout/navbar.php"); ?>
 <?php include("layout/nav_side.php"); ?>
 <!-- nav end -->

 <!-- section start -->
 <?php //include("layout/section_one.php"); ?>

 <!-- section end -->
 <!-- about start -->
 <?php //include("layout/about_section.php") ?>

 <!-- about end -->

 <!-- customer start -->
 <div class="container" id="blogs">
  <h1 class="text-center mt-4 text-light fw-bold">
   User Login
  </h1>

  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-body">
      <form action="actions/user_login.php" method="POST">
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
       </div>

       <button type="submit" name="login" class="btn btn-primary">Login</button>
      </form>
     </div>
    </div>
   </div>
  </div>
  <?php //include("layout/customer_section.php") ?>
  <!-- customer end -->

  <!-- Contact start -->
  <?php //include("layout/contact_section.php") ?>
  <!-- Contact end -->
 </div>
 <!-- footer start -->
 <?php include("layout/footer.php"); ?>