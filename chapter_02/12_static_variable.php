<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>php Static Variable</title>
</head>

<body>
 <?php 
function NormalV(){
 $value = 1;
 echo $value . "<br>";
 $value++;
}

NormalV();
NormalV();
NormalV();
NormalV();

function StaticV(){
 static $value = 1;
 echo $value . " Static <br>";
 $value++;
}

StaticV();
StaticV();
StaticV();
StaticV();
?>
</body>

</html>