<?php 
session_start();
include("function.php");
$auth = check();

// user detail
$user_id = $_SESSION['id'];
$user_name = $_SESSION['username'];
$user_email = $_SESSION['email'];
$user_phone = $_SESSION['phone'];
$user_address = $_SESSION['address'];

//echo $user_id;
 ?>
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
    <?php 
    include("config/db_con.php");
    // images details from the database
    $id = $_GET['id'];
    $deatil = $link->query("SELECT * FROM images WHERE id = '$id'");
    $row = $deatil->fetch_assoc();
    
    ?>
    <!-- Featured blog post-->
    <div class="card mb-4">
     <a href="#!"><img class="card-img-top" src="admin/actions/images/<?php echo $row['file_name']; ?>" alt="..." /></a>
     <div class="card-body">
      <div class="small text-muted"><?php echo $row['created_at'] ?></div>
      <h2 class="card-title">Posted By : <?php echo $auth ?></h2>
      <p class="card-text"><?php echo $row['description'] ?></p>
      <a class="btn btn-primary" href="index.php">Back →</a>
     </div>
    </div>
    <section class="mb-5">
     <div class="card bg-light">
      <div class="card-body">
       <!-- Comment form-->
       <?php 
     include("config/db_con.php");
     // comment form
     $id = $_GET['id'];
     //$user_id = $auth;
     $comment = $link->query("SELECT * FROM gallery_comments WHERE image_id = '$id'");
     $row = $comment->fetch_assoc();
      ?>
       <form action="actions/comment.php" method="post">
        <div class="form-group">
         <textarea class="form-control" name="comment" rows="3" placeholder="Write your comment here..."></textarea>
        </div>
        <input type="hidden" name="image_id" value="<?php echo $id; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <div class="form-group mt-3">
         <button type="submit" class="btn btn-primary">Submit</button>
        </div>
       </form>
       <hr>
       <?php 
      $sql= "SELECT gallery_comments.*, users.username AS name FROM gallery_comments LEFT JOIN users ON gallery_comments.user_id = users.id Where gallery_comments.image_id = '$id' ORDER BY gallery_comments.id DESC";
      $result = $link->query($sql);
      if($result->num_rows > 0) :
        while($row = $result->fetch_assoc()) :
          ?>
       <div class="d-flex mb-4">
        <!-- Parent comment-->
        <?php
        // image link url random
        
        ?>
        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
          alt="..." /></div>
        <!-- display comment  -->

        <div class="ms-3">
         <div class="fw-bold"><?php echo $row['name'] ?></div>
         <?php echo $row['comment'] ?>
         <div class="text-muted"><?php echo date("F j, Y", strtotime($row['created_at'])); ?></div>
         <!-- delete comment link -->
         <?php if($row['user_id'] == $user_id) : ?>
         <a href="actions/delete_comment.php?id=<?php echo $row['id'] ?>&image_id=<?php echo $id ?>"
          class="btn btn-outline-danger">Delete</a>
         <?php endif; ?>
        </div>
       </div>
       <?php endwhile; ?>
       <?php endif; ?>
       <!-- end comment -->
      </div>
     </div>
    </section>
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
 <?php include("layouts/footer.php"); 
 
 /*
<input type="hidden" name="user_email" value="<?php echo $user_email; ?>">
 <input type="hidden" name="user_phone" value="<?php echo $user_phone; ?>">
 <input type="hidden" name="user_address" value="<?php echo $user_address; ?>">


 $id = $_GET['id'];
 $comment = $link->query("SELECT * FROM gallery_comments WHERE id = '$id'");
 while ($row = $comment->fetch_assoc()) {
 ?>
 <div class="media">
  <img class="d-flex mr-3 rounded-circle" src="admin/actions/images/<?php echo $row['user_image']; ?>"
   alt="Generic placeholder image" width="50" height="50">
  <div class="media-body">
   <h5 class="mt-0"><?php echo $row['user_name']; ?></h5>
   <?php echo $row['comment']; ?>
  </div>
 </div>
 <hr>
 <?php } ?>



 // comment display true
 $id = $_GET['id'];
 $comment = $link->query("SELECT * FROM gallery_comments WHERE image_id = '$id'");
 while ($row = $comment->fetch_assoc()) {
 ?>
 <div class="media mb-4">
  <img class="d-flex mr-3 rounded-circle" src="admin/actions/images/<?php echo $row['user_id']; ?>" alt="">
  <div class="media-body">
   <h5 class="mt-0"><?php echo $row['user_id']; ?></h5>
   <?php echo $row['comment']; ?>
  </div>
 </div>
 <?php
        }
       ?>
 */
 ?>