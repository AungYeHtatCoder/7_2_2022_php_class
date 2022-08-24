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
    <?php 
    include("config/db_con.php");
    //pagination query from post table 
    $query = $link->query("SELECT * FROM posts");
    //number of rows
    $num_rows = $query->num_rows;
    //number of rows per page
    $num_per_page = 5;
    //number of pages
    $num_pages = ceil($num_rows / $num_per_page);
    //get the current page
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = 1;
    }
    //calculate the starting row number
    $offset = ($page - 1) * $num_per_page;
    //get posts from the database
    $query = $link->query("SELECT posts.*, users.username AS name, categories.category_name AS cat_name FROM posts LEFT JOIN users ON posts.user_id = users.id LEFT JOIN categories ON posts.category_id = categories.id ORDER BY created_at DESC LIMIT $offset, $num_per_page");
    ?>
    <?php 
    if($query->num_rows > 0):
    while($row = $query->fetch_assoc()): ?>
    <div class="card mb-4">
     <a href="#!"><img class="card-img-top" src="admin/actions/images/<?php echo $row['file_name'] ?>" alt="..." /></a>
     <div class="card-body">
      <div class="small text-muted"><?php echo date("F j, Y", strtotime($row['created_at'])); ?>
       <span>Posted By : <strong><?php echo $row['name'] ?></strong></span>
      </div>
      <h2 class="card-title"><?php echo $row['title']; ?></h2>
      <p class="card-text"><?php echo substr($row['description'], 0, 100); ?></p>
      <a class="btn btn-primary" href="post_detail.php?id=<?php echo $row['id']; ?>">Read more →</a>
     </div>
    </div>
    <?php endwhile; ?>
    <?php else: ?>
    <p>No post(s) found...</p>
    <?php endif; ?>

    <div class="text-center">
     <ul class="pagination justify-content-center mb-4">
      <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
      <?php
        // show pages
        for ($i = 1; $i <= $num_pages; $i++) {
          
        echo '<li class="page-item"><a class="page-link" href="post_index.php?page=' . $i . '">' . $i . '</a></li>';        
        }
        ?>
      <li class="page-item"><a class="page-link" href="#!">Older</a></li>
     </ul>
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