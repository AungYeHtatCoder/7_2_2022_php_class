<?php include("layout/head.php") ?>

<body id="home" style="background-color: rgb(78, 44, 21)">
 <!-- nav start -->
 <?php include("layout/navbar.php"); ?>
 <?php include("layout/nav_side.php"); ?>
 <!-- nav end -->

 <!-- section start -->
 <?php include("layout/section_one.php"); ?>

 <!-- section end -->
 <!-- about start -->
 <?php include("layout/about_section.php") ?>

 <!-- about end -->

 <!-- customer start -->
 <div class="container" id="blogs">
  <h1 class="text-center mt-4 text-light fw-bold">
   COMMON CUSTOMER'S QUESTIONS
  </h1>
  <?php include("layout/customer_section.php") ?>
  <!-- customer end -->

  <!-- Contact start -->
  <?php include("layout/contact_section.php") ?>
  <!-- Contact end -->
 </div>
 <!-- footer start -->
 <?php include("layout/footer.php"); ?>

 <!-- reg_form modal start -->
 <!-- Button trigger modal -->
 <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
 </button> -->

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">User Register</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <form action="actions/user_create.php" method="post">
      <div class="mb-3">
       <label for="" class="form-label">User name</label>
       <input type="text" class="form-control" name="user_name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Email address</label>
       <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
       <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
       <label for="exampleInputPassword1" class="form-label">Password</label>
       <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
       <label for="" class="form-label">Phone</label>
       <input type="text" class="form-control" name="phone" placeholder="Enter your Phone">
      </div>
      <div class="mb-3">
       <label for="" class="form-label">Addres</label>
       <input type="text" class="form-control" name="address" placeholder="Enter your Addres">
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" name="user_create" class="btn btn-primary">Register</button>
      </div>
     </form>
    </div>

   </div>
  </div>
 </div>
 <!-- reg_form modal end -->

 <!-- login modal start -->


 <!-- Modal -->
 <div class="modal fade" id="exampleModallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     ...
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     <button type="button" class="btn btn-primary">Save changes</button>
    </div>
   </div>
  </div>
 </div>
 <!-- login modal end -->