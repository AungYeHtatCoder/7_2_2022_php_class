<?php 

include("../config/db_con.php");
// add data to the database
if (isset($_POST['comment'])) {
    $image_id = $_POST['image_id'];
    $user_name = $_POST['user_id'];
    //$user_email = $_POST['user_email'];
    //$user_phone = $_POST['user_phone'];
    //$user_address = $_POST['user_address'];
    $comment = $_POST['comment'];
    $created_at = date("Y-m-d H:i:s");
    $link->query("INSERT INTO gallery_comments (image_id, user_id, comment, created_at) VALUES ('$image_id', '$user_name',  '$comment', '$created_at')");
    header("location: ../image_detail.php?id=$image_id");
}
?>