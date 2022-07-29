<?php 
 if (isset($_POST['submit'])) {
  session_start();
  $_SESSION['user'] = $_POST['name'];
  echo "session variable set <br>";
  echo "<a href='2_check_session.php'> <b> Read session variable<b> </a>";
  exit;
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="<?php $_PHP_SELF ?>" method="POST">
  name: <input type="text" name="name"> <br>
  age : <input type="text" name="age"> <br>
  <input type="submit" name="submit" value="submit">
 </form>
</body>

</html>