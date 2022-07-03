<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>File Upload Form</title>
</head>

<body>
 <form action="actions/1_file_upload_process.php" method="post" enctype="multipart/form-data">
  <h2>Upload File</h2>
  <label for="fileSelect">Filename:</label>
  <input type="file" name="photo" id="fileSelect">
  <input type="submit" name="submit" value="Upload">
  <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
 </form>
 <?php
  if (isset($_GET['error'])) {
   echo '<p class="error">Error: ' . $_GET['error'] . '</p>';
  }
  if (isset($_GET['message'])) {
   echo '<p class="message">' . $_GET['message'] . '</p>';
  }
// photo array to display all uploaded photos
 //$photos = array();
 // set cookie
 // if(isset($_COOKIE["photos"])){
 //  $photos = unserialize($_COOKIE["photos"]);
 // }
 //var_dump($photos);
 // display all photos
 // foreach($photos as $photo){
 //  echo '<img src="actions/uploads/' . $photo . '" alt="" width="200px" height="200px">';
 // }
 ?>
 <!-- display photo -->
 <?php if(isset($_GET["file"]) && $_GET["file"] != ""): ?>
 <img src="actions/uploads/<?php echo $_GET["file"]; ?>" alt="" width="200px" height="200px">
 <?php endif; ?>



</body>

</html>