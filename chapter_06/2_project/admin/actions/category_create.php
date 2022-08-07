<?php 
include("../config/db_con.php");

// create category
if(isset($_POST['create'])){
    $category_name = $_POST['category_name'];
    if($category_name == ""){
        echo "Category Name is required";
    }

    $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    $result = mysqli_query($link, $query);
    if($result){
        //echo "Category Created Successfully";
        header("Location: ../category_index.php");
    }else{
        echo "Category Not Created";
    }
}