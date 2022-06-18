<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Foreach loops</title>
</head>

<body>
 <?php 
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($numbers as $number) {
    echo $number;
    echo "<br>";
}
 ?>
 <hr>
 <?php 
 // associative array
 $foods = array(
  "food1" => "pizza",
  "food2" => "burger",
  "food3" => "pasta",
  "food4" => "salad",
  "food5" => "soup",
  "food6" => "cake",
  "food7" => "ice cream",
  "food8" => "chocolate",
  "food9" => "cookies",
  "food10" => "pie"
 );
 foreach ($foods as $key => $food) {
  echo "$key: $food <br>";
 }
 ?>
 <hr>
 <?php
  // associative array
  $fruits = array("item_number" => 12345, "name" => "apple", "price" => 1.99, "quantity" => 10, "color" => "red", "region" => "europe");


  foreach ($fruits as $key => $fruit) {
   echo "$key: $fruit <br>";
  }
  ?>
 <hr>
 <?php

  $Food=array(
	"item_number"=>1050,
	"name"=>"Pizza",
	"region"=>"Italy",
	"Side_food"=>"Pasta",
	"drink"=>"Cook",
	"package_price"=>78545
);
foreach($Food as $Key=>$Value){
	$Data=ucwords( str_replace("_"," ",$Key));
if($Key=="package_price"){
	if(is_numeric($Value)){
		}else
		{
	$Value="Can not be determined";
		}
}	
	echo "{$Data} : {$Value} <br>";
}
 ?>
</body>

</html>