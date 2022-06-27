<?php 
include_once '../libs/config.php';
include_once '../libs/database.php';
include_once '../date_function.php';
include("../libs/ItemTable.php");
//creating database object
$db = new ItemTable();
$id = $_GET['id'];
$single_item = $db->get_single_item($id);
$row = $single_item->fetch_assoc();




?>
<?php include("include/head.php") ?>

<body>
 <!-- Responsive navbar-->
 <?php include("include/navbar.php"); ?>
 <!-- Page header with logo and tagline-->
 <?php include("include/header.php"); ?>
 <!-- Page content-->
 <div class="container">
  <div class="row">
   <!-- Blog entries-->
   <div class="col-lg-12">
    <!-- Featured blog post-->
    <div class="card">
     <div class="card-header">
      <h4>Edit Category <span><a href="dashboard.php" class="btn btn-warning">Back To Dashboard</a></span></h4>
     </div>
     <div class="card-body">
      <form action="action/item_process.php" method="post">
       <div class="mb-3">
        <label for="item_name" class="form-label"> Item Name</label>
        <input type="text" name="item_name" class="form-control" id="item_name" aria-describedby="Category item_name"
         value="<?php echo $row['item_name']; ?>">
       </div>

       <div class="mb-3 mt-5">
        <input type="submit" name="update" class="btn btn-primary" id="title" value="Update Item">
       </div>
      </form>
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

   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php include("include/footer.php"); ?>