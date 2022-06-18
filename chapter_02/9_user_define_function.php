<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>User Define Function </title>
</head>

<body>
 <?php 
function Welcome(){
 echo "Welcome to my ITEMPIRE TECHNONOLOGY PHP CLASS";
}
Welcome(); 
echo "<hr>";
$numbers = 23456;
function Addition (){
 // global $numbers;
 // echo $numbers + 100;
 $a = 100;
 $b = 200;
 $c = $a + $b;
 echo "Addition of $a and $b is $c";
}
Addition();
echo "<hr>";
function Addition_Using_Function_Parameter($a, $b)
{
 $results = $a + $b;
 echo "Addition using function parameter is : " . $results . "<br>";
}
Addition_Using_Function_Parameter(100, 200);
Addition_Using_Function_Parameter(300, 400);
Addition_Using_Function_Parameter(500, 600);
echo "<hr>";
function Addition_using_return($q, $p)
{
 $results = $q + $p;
 return $results;
}
$total = Addition_using_return(100, 200);
$total_1 = Addition_using_return($total, 400);
echo "Addition using return is : " . $total_1 . "<br>";
echo "<hr>";
 ?>
</body>

</html>