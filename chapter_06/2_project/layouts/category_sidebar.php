<div class="card mb-4">
 <div class="card-header">Categories</div>
 <div class="card-body">
  <div class="row">
   <div class="col-sm-6">
    <ul class="list-unstyled mb-0">
     <?php
      // get all category data
      include("config/db_con.php");
      $sql = "SELECT * FROM categories";
      $result = mysqli_query($link, $sql);
      while ($row = mysqli_fetch_assoc($result)) :

     ?>
     <li><a href="#!"><?php echo $row['category_name'] ?></a></li>
     <?php endwhile; ?>
    </ul>
   </div>
   <div class="col-sm-6">
    <ul class="list-unstyled mb-0">
     <!-- <li><a href="#!">JavaScript</a></li>
     <li><a href="#!">CSS</a></li>
     <li><a href="#!">Tutorials</a></li> -->
    </ul>
   </div>
  </div>
 </div>
</div>