<?php 
include("../config/db_con.php");
// like and dislike 
if(isset($_POST['like']) && isset($_POST['dislike']))
{
   $user_id = $_POST['user_id'];
   $post_id = $_POST['post_id'];
   $query = "insert into likes (user_id, post_id) values ('$user_id', '$post_id')";
   $link->query($query);
   header("location: post_detail.php?id=$post_id");
   
}

/*

$sql = "SELECT * FROM likes WHERE post_id = '$post_id' AND user_id = '$user_id'";
$result = $link->query($sql);
if($result->num_rows > 0) :
  while($row = $result->fetch_assoc()) :
    ?>
<?php if($row['like'] == 1) : ?>
<span><i class="fa-solid fa-thumbs-up"></i> <?php echo $like; ?></span>
<span><i class="fa-solid fa-thumbs-down"></i> <?php echo $dislike; ?></span>
<?php elseif($row['dislike'] == 1) : ?>
<span><i class="fa-solid fa-thumbs-up"></i> <?php echo $like; ?></span>
<span><i class="fa-solid fa-thumbs-down"></i> <?php echo $dislike; ?></span>
<?php endif; ?>
<?php endwhile; endif; ?>
<!-- like and dislike form -->
<form action="actions/like.php" method="POST">
 <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
 <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
 <button type="submit" name="like" class="btn btn-primary"><i class="fa-solid fa-thumbs-up"></i></button>
 <button type="submit" name="dislike" class="btn btn-primary"><i class="fa-solid fa-thumbs-down"></i></button>
</form>
</div>
<div class="media">
 <img src="<?php echo $row['image']; ?>" class="mr-3" alt="...">
 <div class="media-body">
  <h5 class="mt-0"><?php echo $row['name']; ?></h5>
  <?php echo $row['comment']; ?>
 </div>
</div>

</div>
</div>
*/