<?php 
if(isset($_POST['Submit'])) {
 $username = $_POST['Username'];
 $password = $_POST['Password'];

 if($username == "admin" && $password == "1234") {
  echo "Welcome {$username}";
 } else {
  echo "Wrong Username or Password";
 }
}else{
 echo "<h2> Login Required</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>HTML 5 FORM</title>
</head>

<body>
 <fieldset>
  <legend>HTML 5 FORM</legend>
  <form action="1_form.php" method="POST">
   <label for="Username">Username :</label>
   <input type="text" name="Username" id="Username" placeholder="Enter Username" required>
   <br>
   <label for="Password">Password :</label>
   <input type="password" name="Password" id="Password" placeholder="Enter Password" required>
   <br>
   &nbsp;
   <input type="submit" value="Submit" name="Submit">
  </form>
 </fieldset>
</body>

</html>