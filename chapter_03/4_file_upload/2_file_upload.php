<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <h1>File Upload </h1>
 <form action="" method="post" enctype="multipart/form-data">
  Select Image:<input type="file" name="image"><br /><br />
  Description:<input type="text" name="desc"><br /><br />
  <input type="submit" name="upload" value="Upload Now">
 </form>
 <br>
 <hr>
 <?php
 if(isset($_POST['upload'])){
 $image_name = $_FILES['image']['name'];
 $image_type = $_FILES['image']['type'];
 $image_size = $_FILES['image']['size'];
 $image_tmp_name= $_FILES['image']['tmp_name'];
 $desc = $_POST['desc'];
 
 
 move_uploaded_file($image_tmp_name,"photos/$image_name");
 echo "<img src='photos/$image_name' width='400' height='250'><br>$desc"; 
 }
 // all photos array
 $photos = array();
 // set cookie
 if(isset($_COOKIE["$image_name"])){
  $photos = unserialize($_COOKIE["$image_name"]);
 }
 // display all photos
 foreach($photos as $photo){
  echo '<img src="photos/' . $photo . '" alt="" width="200px" height="200px">';
 }
 
 

?>
</body>

</html>