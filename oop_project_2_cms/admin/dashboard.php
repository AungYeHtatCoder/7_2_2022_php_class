<?php 
include_once '../libs/config.php';
include_once '../libs/database.php';
include_once '../date_function.php';
$db = new database();
$query = "SELECT * FROM posts";
$posts = $db->select($query);
// echo "<pre>";
// print_r($posts);
// echo "</pre>";

$query = "SELECT * FROM categories";
$categories = $db->select($query);
?>

<style>
#readmore {
 float: right;
 padding: 10px;
}
</style>
<?php
 include("include/head.php");
?>

<body>
 <!-- Responsive navbar-->
 <?php include("include/navbar.php"); ?>
 <!-- Page header with logo and tagline-->
 <?php include("include/header.php"); ?>
 <!-- Page content-->
 <div class="container">
  <div class="row">
   <!-- Blog entries-->
   <div class="col-lg-8">
    <!-- Featured blog post-->
    <div class="card">
     <div class="card-header">
      <h4>Featured Post</h4>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <tr align="center">
        <td colspan="4">
         <h6>Manage Your Posts : </h6>
        </td>
       </tr>

       <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
        <th>Action</th>
       </tr>
       <?php while($row = $posts->fetch_array()) : ?>
       <?php 
        // echo "<pre>";
        // print_r($row); 
        // echo "</pre>"; 
        ?>
       <tbody>
        <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['title']; ?></td>
         <td><?php echo $row['author']; ?></td>
         <td><?php echo formatDate($row['date']); ?></td>
         <td>
          <a class="btn btn-primary btn-sm" href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a>
          <a class="btn btn-danger btn-sm" href="delete_post.php?id=<?php echo $row['id']; ?>">Delete</a>
        </tr>
        <?php endwhile; ?>
       </tbody>
      </table>

      <!-- categories -->

     </div>
    </div>
    <div class="card">
     <div class="card-header">
      <h4>Categories</h4>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <tr align="center">
        <td colspan="4">
         <h6>Manage Your Categories : </h6>
        </td>
       </tr>

       <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
       </tr>
       <?php while($row_1 = $categories->fetch_array()) : ?>
       <?php 
        // echo "<pre>";
        // print_r($row); 
        // echo "</pre>"; 
        ?>
       <tbody>
        <tr>
         <td><?php echo $row_1['id']; ?></td>
         <td><?php echo $row_1['title']; ?></td>
         <td>
          <a class="btn btn-primary btn-sm" href="edit_category.php?id=<?php echo $row_1['id']; ?>">Edit</a>
          <a class="btn btn-danger btn-sm" href="delete_category.php?id=<?php echo $row_1['id']; ?>">Delete</a>
        </tr>
        <?php endwhile; ?>
       </tbody>
      </table>
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
    <?php include("include/pagination.php") ?>
   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">
    <!-- Search widget-->
    <?php include("include/search.php"); ?>
    <!-- Categories widget-->
    <?php include("include/categories_sidebar.php"); ?>
    <!-- Side widget-->
    <?php include("include/sidebar.php"); ?>
   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php include("include/footer.php"); ?>