<?php 
include_once 'libs/config.php';
include_once 'libs/database.php';
include_once 'date_function.php';
$db = new database();
$query = "SELECT * FROM posts order by id desc";
$posts = $db->select($query);

?>
<?php include("layouts/head.php") ?>
<style>
#readmore {
 float: right;
 padding: 10px;
}
</style>

<body>
 <!-- Responsive navbar-->
 <?php include("layouts/navbar.php") ?>
 <!-- Page header with logo and tagline-->
 <?php include("layouts/header.php") ?>
 <!-- Page content-->
 <div class="container">
  <div class="row">
   <!-- Blog entries-->
   <div class="col-lg-8">
    <!-- Featured blog post-->
    <?php while($row = $posts->fetch_array()) : ?>
    <div class="card mb-4">
     <a href="#!"><img style="float: left; margin-right: 20px; margin-bottom: 10px;" class="card-img-top"
       src="images/<?php echo $row['img']; ?>" alt="..." width="200px" height="200px" /></a>
     <div class="card-body">

      <div class="small text-muted">ON <?php echo formatDate($row['date']) ; ?> BY <span><a class="btn btn-primary"
         href="#!"><?php echo $row['author']; ?></a></span></div>
      <h2 class="card-title"><?php echo $row['title']; ?></h2>
      <p style="text-align: justify;" class="card-text"><?php echo substr($row['content'], 0, 200) ; ?></p>
      <a id="readmore" class="btn btn-primary" href="single_post.php?id=<?php echo $row['id']; ?>">Read More ... </a>
     </div>
    </div>
    <?php endwhile; ?>
    <!-- Nested row for non-featured blog posts-->
    <div class="row">
     <div class="col-lg-6">
      <!-- Blog post-->
      <div class="card mb-4">
       <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
       <div class="card-body">
        <div class="small text-muted">January 1, 2022</div>
        <h2 class="card-title h4">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.
        </p>
        <a class="btn btn-primary" href="#!">Read more →</a>
       </div>
      </div>
      <!-- Blog post-->
      <div class="card mb-4">
       <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
       <div class="card-body">
        <div class="small text-muted">January 1, 2022</div>
        <h2 class="card-title h4">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.
        </p>
        <a class="btn btn-primary" href="#!">Read more →</a>
       </div>
      </div>
     </div>
     <div class="col-lg-6">
      <!-- Blog post-->
      <div class="card mb-4">
       <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
       <div class="card-body">
        <div class="small text-muted">January 1, 2022</div>
        <h2 class="card-title h4">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.
        </p>
        <a class="btn btn-primary" href="#!">Read more →</a>
       </div>
      </div>
      <!-- Blog post-->
      <div class="card mb-4">
       <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
       <div class="card-body">
        <div class="small text-muted">January 1, 2022</div>
        <h2 class="card-title h4">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla?
         Quos cum ex quis soluta, a laboriosam.</p>
        <a class="btn btn-primary" href="#!">Read more →</a>
       </div>
      </div>
     </div>
    </div>
    <!-- Pagination-->
    <?php include("layouts/pagination_nav.php") ?>
   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">
    <!-- Search widget-->
    <?php include("layouts/search_sidebar.php") ?>
    <!-- Categories widget-->
    <?php include("layouts/categories_sidebar.php") ?>
    <!-- Side widget-->
    <?php include("layouts/side_widget.php") ?>
   </div>
  </div>
 </div>
 <!-- Footer-->