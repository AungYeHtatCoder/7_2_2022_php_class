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
    <?php 
    include("config/db_con.php");
    // get posts details from the database with users and categories
    $id = $_GET['id'];
    $deatil = $link->query("SELECT posts.id, posts.title, posts.description, posts.file_name, posts.created_at, users.username, categories.category_name FROM posts INNER JOIN users ON posts.user_id = users.id INNER JOIN categories ON posts.category_id = categories.id WHERE posts.id = '$id'");
    $row = $deatil->fetch_assoc();
    
     ?>
    <div class="card mb-4">
     <a href="#!"><img class="card-img-top" src="admin/actions/images/<?php echo $row['file_name']; ?>" alt="..." /></a>
     <div class="card-body">
      <div class="small text-muted"><?php echo date("F j, Y", strtotime($row['created_at'])); ?> ||
       <span><strong><?php echo $row['category_name'] ?></strong></span>
      </div>
      <h2 class="card-title">Posted By : <?php echo $row['username'] ?> <span><i
         class="fa-solid fa-thumbs-up"></i></span></h2>
      <p class="card-text"><?php echo $row['description'] ?></p>
      <a class="btn btn-primary" href="index.php">Back → </a>
      <div class="small text-muted">
       <?php 
        // like and dislike
        $like = $link->query("SELECT * FROM likes WHERE post_id = '$id'");
        $like_count = $like->num_rows;
        $dislike = $link->query("SELECT * FROM likes WHERE post_id = '$id'");
        $dislike_count = $dislike->num_rows; 
        ?>
       <span><i class="fa-solid fa-thumbs-up"></i> <?php echo $like_count; ?></span>
       <span><i class="fa-solid fa-thumbs-down"></i> <?php echo $dislike_count; ?></span>

       <!-- like and dislike form -->
       <form action="actions/like.php" method="POST">
        <input type="hidden" name="post_id" value="<?php echo $id; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

        <button type="submit" name="like" class="btn btn-primary"><i class="fa-solid fa-thumbs-up"></i></button>
        <button type="submit" name="dislike" class="btn btn-primary"><i class="fa-solid fa-thumbs-down"></i></button>
       </form>

      </div>
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
     $comment = $link->query("SELECT * FROM comments WHERE post_id = '$id'");
     $row = $comment->fetch_assoc();
      ?>
       <form action="actions/post_comment.php" method="post">
        <div class="form-group">
         <textarea class="form-control" name="comment" rows="3" placeholder="Write your comment here..."></textarea>
        </div>
        <input type="hidden" name="post_id" value="<?php echo $id; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <div class="form-group mt-3">
         <button type="submit" class="btn btn-primary">Submit</button>
        </div>
       </form>
       <hr>
       <?php 
      $sql= "SELECT comments.*, users.username AS name FROM comments LEFT JOIN users ON comments.user_id = users.id Where comments.post_id = '$id' ORDER BY comments.id DESC";
      $result = $link->query($sql);
      if($result->num_rows > 0) :
        while($row = $result->fetch_assoc()) :
          ?>
       <div class="d-flex mb-4">
        <!-- Parent comment-->
        <?php
        // image link url random
        // $id = $user_id;
        // $deatil = $link->query("SELECT * FROM users WHERE id = '$id'");
        // $profile = $deatil->fetch_assoc();
        // get user profile image for all comments
        $id = $row['user_id'];
        $deatil = $link->query("SELECT * FROM users WHERE id = '$id'");
        $profile = $deatil->fetch_assoc();
        
        
        ?>
        <?php 
        // get profile image
        // if($profile['photo'] == "") {
        //   $image = "https://ui-avatars.com/api/?name=".$profile['username']."&background=random";
        // } else {
        //   $image = "admin/actions/images/".$profile['photo'];
        // }
        
        ?>
        <div class="flex-shrink-0"><img class="rounded-circle"
          src="admin/actions/images/<?php echo $profile['photo']; ?>" alt="..." width="50px" height="50px" /></div>
        <!-- display comment  -->

        <div class="ms-3">
         <div class="fw-bold"><?php echo $row['name'] ?></div>
         <?php echo $row['comment'] ?>
         <div class="text-muted"><?php echo date("F j, Y", strtotime($row['created_at'])); ?></div>
         <!-- delete comment link -->
         <?php if($row['user_id'] == $user_id) : ?>
         <a href="actions/post_delete_comment.php?id=<?php echo $row['id'] ?>&post_id=<?php echo $id ?>"
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

 <?php 

 /* 
// posts details from the database
    $id = $_GET['id'];
    $deatil = $link->query("SELECT posts.*, users.username FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.id = '$id'");
    $row = $deatil->fetch_assoc();
 */
?>