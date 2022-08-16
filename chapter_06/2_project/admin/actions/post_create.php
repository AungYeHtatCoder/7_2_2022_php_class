<?php
session_start();
include("../function.php");
$auth_id = $_SESSION['id'];
// Include the database configuration file
include ("../config/db_con.php");

$statusMsg = '';

// File upload path
$category_id = $_POST['category_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["upload"]) && !empty($_FILES["file"]["name"]) && !empty($_POST["description"]) && !empty($_POST["category_id"]) && !empty($_POST["title"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $link->query("INSERT into posts (user_id, category_id, title, description, file_name, created_at) VALUES ('".$auth_id."','".$category_id."', '".$title."', '".$description."', '".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("Location: ../post_index.php?success");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>