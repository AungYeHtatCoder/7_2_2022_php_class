<?php 
include("layouts/head.php");
include("config/db_con.php");
// search form images table
$search_term = $_POST['search'];
$query = $link->query("SELECT * FROM images WHERE description LIKE '%$search_term%'");
//include("layouts/navbar.php");
//include("layouts/header.php");

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
    <?php
echo "<h1>Search results for: $search_term</h1>";

if($query->num_rows > 0):
while($row = $query->fetch_assoc()):
?>
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
   </div>
  </div>
 </div>
 <?php include("layouts/footer.php"); ?>