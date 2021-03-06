<?php 
include_once '../libs/config.php';
include_once '../libs/database.php';
include_once '../date_function.php';
include("../libs/ItemTable.php");
$db = new database();
$query = "SELECT * FROM posts";
$posts = $db->select($query);
// echo "<pre>";
// print_r($posts);
// echo "</pre>";

$query = "SELECT * FROM categories";
$categories = $db->select($query);
$item_table = new ItemTable();
$items = $item_table->get_all_items();



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
    <?php 
    if (isset($_GET['msg'])) {
      echo "<div class='alert alert-primary text-center'>".$_GET['msg']."</div>";
    }
    ?>
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
          <a class="btn btn-primary btn-sm" href="update_post.php?id=<?php echo $row['id']; ?>">Edit</a>
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
    <div class="card">
     <div class="card-header">
      <h4>Categories</h4>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <tr align="center">
        <td colspan="4">
         <h6>Manage Your Items : </h6>
        </td>
       </tr>

       <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Action</th>
       </tr>

       <tbody>
        <tr>
         <?php while($row_2 = $items->fetch_array()) : ?>
         <td><?php echo $row_2['id']; ?></td>
         <td><?php echo $row_2['item_name']; ?></td>
         <td>
          <a class="btn btn-primary btn-sm" href="edit_item.php?id=<?php echo $row_2['id']; ?>">Edit</a>
          <a class="btn btn-danger btn-sm" href="delete_category.php?id=<?php echo $row_2['id']; ?>">Delete</a>

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