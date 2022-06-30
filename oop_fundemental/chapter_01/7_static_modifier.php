<?php 
class Cars {
 // class access modifier
 // public, private, protected
  
 static $wheel_count = 4; // public is default
 static $door_count = 4; // static is default
 static $seat_count = 4; // accessible within this class and child classes
  
 static function car_detail() {
     echo Cars::$wheel_count . "<br>";
     echo Cars::$door_count . "<br>";
     echo Cars::$seat_count . "<br>";
 }
 
}

$db_object = new Cars();
//echo $db_object->wheel_count;
echo "<br>";
// call static value
echo Cars::$door_count;
echo "<br>";
// call static method
echo Cars::car_detail();