<?php 
// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
 // CHECK IF FILE WAS UPLOADED WITHOUT ERROR
 if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
  $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png"); // allowed file types
  $filename = $_FILES["photo"]["name"]; // file name
  $filetype = $_FILES["photo"]["type"]; // file type
  $filesize = $_FILES["photo"]["size"]; // file size

  // verify file extension
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

  // verify file size - 5MB maximum
  $maxsize = 5 * 1024 * 1024;
  if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

  // verify file type
  if(in_array($filetype, $allowed)){
   // create a temporary file name
   $tmp_name = $_FILES["photo"]["tmp_name"];
   // move the file to the uploads folder
   move_uploaded_file($tmp_name, "uploads/" . $filename);
   header("Location: ../1_file_upload.php?file=" . $filename);
   //echo "File uploaded successfully.";
  } else {
   //echo "Error: Please select a valid file format.";
   header("Location: ../1_file_upload.php?error=1");
  }
 }
}
?>
<?php
// display photo and size and type
// if($_FILES["photo"]["error"] > 0){
//     echo "Error: " . $_FILES["photo"]["error"] . "<br>";
// } else{
//     echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
//     echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
//     echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
//     echo "Stored in: " . $_FILES["photo"]["tmp_name"];
//}
?>