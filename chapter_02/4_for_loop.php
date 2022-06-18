<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>PHP FORLOOP</title>
</head>

<body>
 <?php 
 for ($i = 0; $i < 10; $i++) {
  echo $i;
  echo "<br>";
 }
 ?>
 <hr>
 <?php
$n = 2;
for ($i = 0; $i < $n; $i++) {
    echo "The number is: $i <br>";
}
 ?>

 <hr>
 <?php
 $a = 12;

 for($i = 1; $i <= 20; $i++) {
  $result = $a * $i;
  echo "$a * $i = $result <br>";
 }
 ?>
</body>

</html>