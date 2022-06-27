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
  $content = $_POST['content'];
  $category = $_POST['cat'];
  $author = $_POST['author'];
  $tags = $_POST['tags'];

  // creating vairable for the image
  $image = $_FILES['image']['name'];
  $image_tmp = $_FILES['image']['tmp_name'];
  if ($title == "" || $content == "" || $category == "" || $author == "" || $tags == "" || $image == "") {
    echo "Please fill all the fields";
  }else {
    move_uploaded_file($image_tmp, "../images/$image");
    $query = "INSERT INTO posts(category_id, title, content, author, img, tags) VALUES('$category', '$title', '$content', '$author', '$image', '$tags')";
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
      <h4>Add New Post <span><a href="dashboard.php" class="btn btn-primary">Back To Dashboard</a></span></h4>
     </div>
     <div class="card-body">
      <form action="add_new_post.php" method="post" enctype="multipart/form-data">
       <div class="mb-3">
        <label for="Title" class="form-label">Post Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="Post Title">
       </div>
       <div class="mb-3">
        <div class="form-floating">
         <textarea name="content" class="form-control" placeholder="Post Content" id="content"></textarea>
         <label for="content">Post Content</label>
        </div>
       </div>
       <div class="mb-3">
        <select name="cat" class="form-select" aria-label="Default select example">
         <option selected>Select Post Category</option>
         <?php while($row = $categories->fetch_array()) : ?>
         <option value="<?php echo $row['id']; ?>"><?php echo $row['title'] ?></option>
         <?php endwhile; ?>
        </select>
       </div>
       <div class="mb-3">
        <label for="Author" class="form-label">Post Author</label>
        <input type="text" name="author" class="form-control" id="author" aria-describedby="Post Author">
       </div>


       <div class="input-group">
        <input type="file" name="image" class="form-control" id="inputGroupFile04"
         aria-describedby="inputGroupFileAddon04" aria-label="Upload">
       </div>
       <div class="mb-3">
        <label for="Tags" class="form-label">Post Tags</label>
        <input type="text" name="tags" class="form-control" id="tags" aria-describedby="Post Tags">
       </div>
       <div class="mb-3 mt-5">
        <input type="submit" name="submit" class="btn btn-primary" id="title" value="Add New Post">
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
    <?php //include("include/pagination.php") ?>
   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">
    <!-- Search widget-->
    <?php //include("include/search.php"); ?>
    <!-- Categories widget-->
    <?php //include("include/categories_sidebar.php"); ?>
    <!-- Side widget-->
    <?php //include("include/sidebar.php"); ?>
   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php include("include/footer.php"); ?>