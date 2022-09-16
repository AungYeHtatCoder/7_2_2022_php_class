<?php include("layouts/head.php"); ?>

<body>
 <!-- Responsive navbar-->
 <?php include("layouts/navbar.php"); ?>
 <!-- Page header with logo and tagline-->
 <?php include("layouts/header.php"); ?>
 <!-- Page content-->
 <div class="container">
  <div class="row">
   <!-- Blog entries-->
   <div class="col-lg-8">
    <!-- Featured blog post-->
    <div id="layoutAuthentication_content">
     <main>
      <div class="container">
       <div class="row justify-content-center">
        <div class="col-lg-5">
         <div class="card shadow-lg border-0 rounded-lg mt-5">
          <div class="card-header">
           <h3 class="text-center font-weight-light my-4">Login</h3>
          </div>
          <div class="card-body">
           <form action="_actions/student_login.php" method="POST">
            <div class="form-floating mb-3">
             <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
             <label for="inputEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
             <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
             <label for="inputPassword">Password</label>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
             <input type="submit" value="Login" class="btn btn-primary">
            </div>
           </form>
          </div>
          <div class="card-footer text-center py-3">
           <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </main>
    </div>
    <!-- Nested row for non-featured blog posts-->
    <div class="row">
     <div class="col-lg-6">
      <!-- Blog post-->

      <!-- Blog post-->

     </div>
     <div class="col-lg-6">
      <!-- Blog post-->

      <!-- Blog post-->

     </div>
    </div>
    <!-- Pagination-->

   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">
    <!-- Search widget-->
    <?php include("layouts/search.php"); ?>
    <!-- Categories widget-->
    <?php include("layouts/category_sidebar.php"); ?>
    <!-- Side widget-->
    <?php include("layouts/side_wiget.php"); ?>
   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php include("layouts/footer.php"); ?>