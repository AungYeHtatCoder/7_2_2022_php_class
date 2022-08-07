<?php 

// category delete
include("../config/db_con.php");
if(isset($_GET['id'])){
    $category_id = $_GET['id'];
    $query = "DELETE FROM categories WHERE id = $category_id";
    $result = mysqli_query($link, $query);
    if($result){
        //echo "Category Deleted Successfully";
        header("Location: ../category_index.php");
    }else{
        echo "Category Not Deleted";
    }
}