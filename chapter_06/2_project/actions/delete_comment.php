<?php 
// delete_comment
include("../config/db_con.php");
// delete comment
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $link->query("DELETE FROM gallery_comments WHERE id = '$id'");
    header("location: ../index.php"); 
}else{
    header("location: ../index.php");
}
?>