<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Inside Job | Pointer</title>
</head>

<body>
 <?php 
 $numbers = array(10, 22, 37, 48, 58, 60, 775, 840, 950, 1000);
 echo current($numbers); // 10
 echo "<br>";
 echo next($numbers); // 22
 echo "<br>";
 echo current($numbers) . " | " . next($numbers); // 37
echo "<br>";
 echo current($numbers). "<br>";
 echo "<br>";
reset($numbers); // reset the pointer to the first element
echo current($numbers). "<br>";
end ($numbers); // move the pointer to the last element
echo current($numbers). "<br>";
next($numbers); // move the pointer to the second last element
echo current($numbers). "<br>"; // 840
 ?>
</body>

</html>