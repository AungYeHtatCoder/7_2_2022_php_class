<?php 
// delete_comment
include("../config/db_con.php");
// delete comment
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $link->query("DELETE FROM comments WHERE id = '$id'");
    header("location: ../post_index.php"); 
}else{
    header("location: ../post_index.php");
}
?>