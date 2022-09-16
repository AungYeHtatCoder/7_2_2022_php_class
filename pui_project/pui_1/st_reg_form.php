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
        <div class="col-lg-7">
         <div class="card shadow-lg border-0 rounded-lg mt-5">
          <div class="card-header">
           <h3 class="text-center font-weight-light my-4">Student Create Account</h3>
          </div>
          <div class="card-body">
           <form action="_actions/student_create.php" method="POST">
            <div class="row mb-3">
             <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
               <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your  name" name="name" />
               <label for="Username">Student Name</label>
              </div>
             </div>

            </div>
            <div class="form-floating mb-3">
             <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
             <label for="inputEmail">Email address</label>
            </div>
            <div class="row mb-3">
             <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
               <input class="form-control" id="inputPassword" type="password" name="password"
                placeholder="Create a password" />
               <label for="inputPassword">Password</label>
              </div>
             </div>
             <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
               <input class="form-control" id="inputPasswordConfirm" name="phone" type="text" placeholder="Phone" />
               <label for="inputPasswordConfirm">Phone</label>
              </div>
             </div>
             <div class="col-md-6">
              <div class="form-floating">
               <input class="form-control" id="inputLastName" type="text" placeholder="Address" name="address" />
               <label for="inputLastName">Address</label>
              </div>
             </div>
            </div>
            <div class="mt-4 mb-0">
             <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Create Account">
             </div>
            </div>
           </form>
          </div>
          <div class="card-footer text-center py-3">
           <div class="small"><a href="login.html">Have an account? Go to login</a></div>
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