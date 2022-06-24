<?php 
include_once '../libs/config.php';
include_once '../libs/database.php';
include_once '../date_function.php';
//creating database object
$db = new database();
// selecting categories
$query = "SELECT * FROM categories";
$categories = $db->select($query);
// inserting posts
if (isset($_POST['submit'])) {
  //creating variables for the form data
 $title = $_POST['title'];
 
  
  if ($title == "") {
    echo "Please fill all the fields";
  }else {
    
    $query = "INSERT INTO categories(title) VALUES('$title')";
    $insert = $db->insert($query);
  }

}
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
      <h4>Add New Category <span><a href="dashboard.php" class="btn btn-warning">Back To Dashboard</a></span></h4>
     </div>
     <div class="card-body">
      <form action="add_new_category.php" method="post">
       <div class="mb-3">
        <label for="Title" class="form-label">Category Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="Category Title">
       </div>

       <div class="mb-3 mt-5">
        <input type="submit" name="submit" class="btn btn-primary" id="title" value="Add New Category">
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