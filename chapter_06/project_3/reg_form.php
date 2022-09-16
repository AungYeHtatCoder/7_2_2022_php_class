<?php 
include("layout/head.php")
?>

<body>

 <?php include("layout/header.php") ?>
 <!-- ======= Hero Section ======= -->
 <?php include("layout/hero_section.php") ?>
 <main id="main">

  <!-- ======= About Us Section ======= -->

  <!-- End About Us Section -->

  <!-- ======= Clients Section ======= -->

  <!-- End Clients Section -->

  <!-- ======= Stats Counter Section ======= -->

  <!-- End Stats Counter Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
   <div class="container text-center" data-aos="zoom-out">
    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
    <h3>Call To Action</h3>
    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
     sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a class="cta-btn" href="#">Call To Action</a>
   </div>
  </section><!-- End Call To Action Section -->
  <div class="container">
   <div class="row">
    <div class="col-lg-8">
     <div class="card">
      <div class="card-header">
       <h1>User Register</h1>
      </div>
      <div class="card-body">
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
  </div>
  <!-- ======= Our Services Section ======= -->
  <!-- End Our Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <!-- End Testimonials Section -->

  <!-- ======= Portfolio Section ======= -->
  <!-- End Portfolio Section -->

  <!-- ======= Our Team Section ======= -->
  <!-- End Our Team Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <?php //include("layout/contact_section.php") ?>
  <!-- End Contact Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include("layout/footer.php") ?>
 <!-- End Footer -->

 <!-- End Footer -->