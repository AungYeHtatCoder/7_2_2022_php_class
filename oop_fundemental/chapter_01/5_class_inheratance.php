<?php 
class Cars {
 var $wheel_count = 4;
 var $door_count = 4;
 function greeting() {
     return "Hello";
 }
}

$bmw = new Cars();

class Trucks extends Cars {
 
 function call_Car_mehtod() {
     return $this->greeting();
 }
}
$tacoma = new Trucks();
echo "This is parents Cars Class Property : Value : " . $tacoma->wheel_count;
echo "<hr>";
echo "call Method : " .  $tacoma->call_Car_mehtod();