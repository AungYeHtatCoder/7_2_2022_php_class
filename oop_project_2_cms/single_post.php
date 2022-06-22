<?php 
include_once 'libs/config.php';
include_once 'libs/database.php';
include_once 'date_function.php';
$id = $_GET['id'];
$db = new database();
$query = "SELECT * FROM posts WHERE id='$id' ";
$posts = $db->select($query);

?>
<?php include("layouts/head.php") ?>
<style>
#readmore {
 float: right;
 padding: 10px;
}
</style>

<body>
 <!-- Responsive navbar-->
 <?php include("layouts/navbar.php") ?>
 <!-- Page header with logo and tagline-->
 <?php include("layouts/header.php") ?>
 <!-- Page content-->
 <div class="container">
  <div class="row">
   <!-- Blog entries-->
   <div class="col-lg-8">
    <!-- Featured blog post-->
    <?php $row = $posts->fetch_array(); ?>
    <div class="card mb-4">
     <a href="#!"><img style="float: left; margin-right: 20px; margin-bottom: 10px;" class="card-img-top"
       src="images/<?php echo $row['image']; ?>" alt="..." width="200px" height="200px" /></a>
     <div class="card-body">

      <div class="small text-muted">ON <?php echo formatDate($row['date']) ; ?> BY <span><a class="btn btn-primary"
         href="#!"><?php echo $row['author']; ?></a></span></div>
      <h2 class="card-title"><?php echo $row['title']; ?></h2>
      <p style="text-align: justify;" class="card-text"><?php echo $row['content'] ; ?></p>

     </div>
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
    <?php include("layouts/search_sidebar.php") ?>
    <!-- Categories widget-->
    <?php include("layouts/categories_sidebar.php") ?>
    <!-- Side widget-->
    <?php include("layouts/side_widget.php") ?>
   </div>
  </div>
 </div>
 <!-- Footer-->