<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Switch Statement</title>
</head>

<body>
 <?php 
 $weather = "cloudy";
 switch($weather) {
  case "Sunny";
  echo "Weather is quite pleasent outside";
  break;
  case "Rainy":
  echo "Its is expected to Raining outside <br>";
  break;
  case "cloudy":
  echo "it can rain today";
  break;
  default:
  echo "Weather can not be forecast <br>";
 }
 ?>
 <hr>
 <?php 
 $restricted_area = "Jazeb";
 switch($restricted_area)
 {
  case 'Guard':
   echo "Permission Granted";
   break;
   case 'Office boy';
   case 'Public':
   case 'Media':
    echo "Permission Denied";
    break;
    default:
    echo "See w3schools.com for coupons";
 }
 ?>
</body>

</html>