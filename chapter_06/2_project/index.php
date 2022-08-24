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

    <!-- pagination -->

    <div class="clearfix">
     <?php
// Include the database configuration file
include ("config/db_con.php");
// pagination query
$query = $link->query("SELECT * FROM images");
// number of rows
$num_rows = $query->num_rows;
// number of rows per page
$num_per_page = 5;
// number of pages
$num_pages = ceil($num_rows / $num_per_page);
// get the current page
if (isset($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = 1;
}
// offset
$offset = ($page - 1) * $num_per_page;
// get images from the database
$query = $link->query("SELECT * FROM images ORDER BY created_at DESC LIMIT $offset, $num_per_page");

?>
     <?php if($query->num_rows > 0): ?>
     <?php while($row = $query->fetch_assoc()): ?>
     <div class="card mb-4">
      <a href="#!"><img class="card-img-top" src="admin/actions/images/<?php echo $row['file_name']; ?>"
        alt="..." /></a>
      <div class="card-body">
       <div class="small text-muted"><?php echo date("F j, Y", strtotime($row['created_at'])); ?></div>
       <!-- <h2 class="card-title">Featured Post Title</h2> -->
       <p class="card-text"><?php echo substr($row['description'], 0, 100); ?></p>
       <a class="btn btn-primary" href="image_detail.php?id=<?php echo $row['id']; ?>">Read more →</a>
      </div>
     </div>
     <?php endwhile; ?>
     <?php else: ?>
     <p>No image(s) found...</p>
     <?php endif; ?>
     <div class="text-center">
      <ul class="pagination justify-content-center mb-4">
       <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
       <?php
        // show pages
        for ($i = 1; $i <= $num_pages; $i++) {
          
        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';        
        }
        ?>
       <li class="page-item"><a class="page-link" href="#!">Older</a></li>
      </ul>
     </div>
    </div>
   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">
    <!-- Search widget-->
    <?php //include("layouts/search.php"); ?>
    <div class="card mb-4">
     <div class="card-header">Search</div>
     <div class="card-body">
      <form action="search_process.php" method="POST">
       <div class="input-group">
        <input class="form-control" name="search" type="text" placeholder="Enter search term..."
         aria-label="Enter search term..." aria-describedby="button-search" />
        <input type="submit" value="Search" class="btn btn-primary" id="button-search">
       </div>
      </form>
     </div>
    </div>
    <!-- Categories widget-->
    <?php include("layouts/category_sidebar.php"); ?>
    <!-- Side widget-->
    <?php include("layouts/side_widget.php"); ?>
   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php include("layouts/footer.php"); ?>
 <?php 
/*
<a href="#" class="card-post__author-avatar card-post__author-avatar--small"
        style="background-image: url('actions/images/<?php echo $row['file_name']; ?>');">Written by John Doe</a>
 <a class="text-fiord-blue" href="single-post.html"><?php echo $row['title']; ?></a>



 <?php if($query->num_rows > 0): ?>
 <?php while($row = $query->fetch_assoc()): ?>
 <div class="card card-small card-post card-post--1">
  <div class="card mb-4" style="background-image: url('actions/images/<?php echo $row['file_name']; ?>');">
   <a href="single-post.html" class="card-post__category badge badge-pill badge-primary">Travel</a>
   <div class="card-post__author d-flex">

    <div class="card-post__author-name">
     <a href="#">John Doe</a>
    </div>
   </div>
  </div>
  <div class="card-body">
   <h5 class="card-title">
   </h5>
   <p class="card-text d-inline-block mb-8"><?php echo $row['description']; ?></p>
   <span class="text-muted">
    <?php echo date("F j, Y", strtotime($row['created_at'])); ?>
   </span>
  </div>
 </div>
 <?php endwhile; ?>
 <?php else: ?>
 <p>No image(s) found...</p>
 <?php endif; ?>



 // pagination


 <div class="clearfix">
  <?php
// Include the database configuration file
include ("config/db_con.php");
// pagination query
$query = $link->query("SELECT * FROM images");
// number of rows
$num_rows = $query->num_rows;
// number of rows per page
$num_per_page = 5;
// number of pages
$num_pages = ceil($num_rows / $num_per_page);
// get the current page
if (isset($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = 1;
}
// offset
$offset = ($page - 1) * $num_per_page;
// get images from the database
$query = $link->query("SELECT * FROM images ORDER BY created_at DESC LIMIT $offset, $num_per_page");
?>
  <div class="text-center">
   <ul class="pagination justify-content-center mb-4">
    <?php
// show pages

for ($i = 1; $i <= $num_pages; $i++) {
echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
}
?>
  </div>
 </div>


 <-- start normal index data display -->
  <?php
// Include the database configuration file
include ("config/db_con.php");
// Get images from the database
$query = $link->query("SELECT * FROM images ORDER BY created_at DESC");
?>
  <?php if($query->num_rows > 0): ?>
  <?php while($row = $query->fetch_assoc()): ?>
  <div class="card mb-4">
   <a href="#!"><img class="card-img-top" src="admin/actions/images/<?php echo $row['file_name']; ?>" alt="..." /></a>
   <div class="card-body">
    <div class="small text-muted"><?php echo date("F j, Y", strtotime($row['created_at'])); ?></div>
    <!-- <h2 class="card-title">Featured Post Title</h2> -->
    <p class="card-text"><?php echo substr($row['description'], 0, 100); ?></p>
    <a class="btn btn-primary" href="image_detail.php?id=<?php echo $row['id']; ?>">Read more →</a>
   </div>
  </div>
  <?php endwhile; ?>
  <?php else: ?>
  <p>No image(s) found...</p>
  <?php endif; ?>
  <-- end normal index data display -->
   */

   ?>