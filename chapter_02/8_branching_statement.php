<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Branching Statement</title>
</head>

<body>
 <?php 
 $name = array("ashin", "indavudha", "shwesihling", "maymyathmu", "kaythwemoe", "maei", "aungyehtat", "jukay", "yanlinaung");
 for($i = 0; $i < count($name); $i++){
 	if($name[$i] == "jukay"){
 		echo "Hello " . $name[$i] . "!<br>";
 	}
 }
 echo "<hr>";
 for($i = 0; $i <= 7; $i++){
  if($name[$i] == "ashin"){
   break; // continue;
  }
  echo "Hello " . $name[$i] . "!<br>";
 }
 ?>
</body>

</html>