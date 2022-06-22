<?php 
//include("libs/config.php");
//include("libs/database.php");
$db = new database();
$query = "SELECT * FROM categories";
$categories = $db->select($query);
//var_dump($categories);
?>


<div class="card mb-4">
 <div class="card-header">Categories</div>
 <div class="card-body">
  <div class="row">

   <div class="col-sm-6">
    <ul class="list-unstyled mb-0">
     <?php while ($row = $categories->fetch_array()) : ?>
     <li><a href="category.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></li>
     <?php endwhile; ?>
    </ul>
   </div>
  </div>
 </div>
</div>