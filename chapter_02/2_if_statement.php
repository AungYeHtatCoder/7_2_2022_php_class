<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>IF Statement</title>
</head>

<body>
 <?php 
$weatehr = "sunny";
if ($weatehr == "sunny") {
 echo "It's a sunny day";
} elseif ($weatehr == "rainy") {
 echo "It's a rainy day";
}elseif ($weatehr == "cloudy") {
 echo "It's a cloudy day";
}elseif ($weatehr == "snowy") {
 echo "It's a snowy day";
}else {
 echo "I don't know what's the weather";
}
?>
 <hr>
 <?php
$boutht_product = false;
if ($boutht_product) {
 echo "<h1>Thank You</h1>";
echo"<p>You product will be dispatch soon</p>";
} else {
 echo "<h1>Please Wait</h1>";
echo"<p>Your payment is in processing</p>";
}
?>
 <hr>
 <?php
$a = 4;
$b = 3;
$c = "Result can no be out";
if ($a < 5 && $a > 0){
 $c = $a / $b;
}
echo $c;
?>
</body>

</html>