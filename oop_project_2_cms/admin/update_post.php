<?php 
// db connection 
$host = "localhost";
$db_name = "oop_project";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// get post id
$id = $_GET['id'];
// get post data
$query = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($conn, $query);
$single = mysqli_fetch_assoc($result);
// get categories
$query = "SELECT * FROM categories";
$result = mysqli_query($conn, $query);
// update post
$category_id = $_POST['cat'];
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$tags = $_POST['tags'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$tags = $_POST['tags'];
if ($title == "" || $content == "" || $category_id == "" || $author == "" || $tags == "" || $image == "") {
    echo "Please fill all the fields";
}else {
    move_uploaded_file($image_tmp, "../images/$image");
    $query = "UPDATE posts
              SET category_id = '$category_id',
                  title = '$title',
                  content = '$content',
                  author = '$author',
                  img = '$image',
                  tags = '$tags'
              WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: ../admin/dashboard.php?msg= Post updated ...");
    }else {
        echo "Post did not updated";
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
      <h4>Update Post <span><a href="dashboard.php" class="btn btn-primary">Back To Dashboard</a></span></h4>
     </div>
     <div class="card-body">
      <form action="update_post.php?=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
       <div class="mb-3">
        <label for="Title" class="form-label">Post Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="Post Title"
         value="<?php echo $single['title']; ?>">
       </div>
       <div class="mb-3">
        <div class="form-floating">
         <textarea name="content" class="form-control" placeholder="Post Content"
          id="content"><?php echo $single['content']; ?></textarea>
         <label for="content">Post Content</label>
        </div>
       </div>
       <div class="mb-3">
        <select name="cat" class="form-select" aria-label="Default select example">
         <option selected>Select Post Category</option>
         <?php if ($result->num_rows > 0) : ?>

         <?php while($row = $result->fetch_assoc()) : ?>
         <?php $categories[] = $row; ?>
         <?php echo "<option value='".$row[' id']."'>".$row['title']."</option>"; ?>

         <?php endwhile ;?>
         <?php endif ;?>


        </select>
       </div>
       <div class="mb-3">
        <label for="Author" class="form-label">Post Author</label>
        <input type="text" name="author" class="form-control" id="author" aria-describedby="Post Author"
         value="<?php echo $single['author']; ?>">
       </div>


       <div class="input-group">
        <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-label="Upload">
        <img src="../images/<?php echo $single['img']; ?>" alt="..." width="150px" height="150px" />
       </div>
       <div class="mb-3">
        <label for="Tags" class="form-label">Post Tags</label>
        <input type="text" name="tags" class="form-control" id="tags" aria-describedby="Post Tags"
         value="<?php echo $single['tags']; ?>">
       </div>
       <div class="mb-3 mt-5">
        <input type="submit" name="update" class="btn btn-primary" id="title" value="Update Post">
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

   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">

   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php include("include/footer.php"); ?>