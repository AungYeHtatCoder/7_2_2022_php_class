<?php 
include("layouts/head.php");
?>

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
    <div class="card mb-4">
     <?php 
       include("config/db_con.php");
       
       // get all post data
       $sql = "SELECT posts.*, users.username AS name, categories.category_name AS cat_name FROM posts LEFT JOIN users ON posts.user_id = users.id LEFT JOIN categories ON posts.category_id = categories.id ORDER BY posts.id DESC";
       $result = mysqli_query($link, $sql);
       while ($row = mysqli_fetch_assoc($result)) :
       ?>
     <a href="#!"><img class="card-img-top" src="admin/actions/images/<?php echo $row['file_name'] ?>" alt="..." /></a>

     <div class="card-body">
      <div class="small text-muted"><?php echo $row['created_at'] ?> <span>
        <h6>posted by : <?php echo $row['name'] ?></h6>
       </span></div>
      <h2 class="card-title"><?php echo $row['title'] ?></h2>
      <p class="card-text"><?php echo $row['description'] ?></p>
      <a class="btn btn-primary" href="post_detail.php?id=" <?php $row['id'] ?>>Read more →</a>
     </div>
     <?php endwhile; ?>
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
    <?php //include("layouts/pagination.php"); ?>
   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">
    <!-- Search widget-->
    <?php include("layouts/search.php"); ?>
    <!-- Categories widget-->
    <?php include("layouts/category_sidebar.php"); ?>
    <!-- Side widget-->
    <?php include("layouts/side_widget.php"); ?>
   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php include("layouts/footer.php"); ?>