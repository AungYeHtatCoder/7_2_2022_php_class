<?php 
class Cars {
 static $wheel_count = 4; // static is default
 static $door_count = 4; // static is default

 static function car_detail()
 {
     //echo self::$wheel_count . "<br>"; // self is reference to current class
     //echo self::$door_count . "<br>";
     // for child class
     return static::$wheel_count . "<br>";
     return static::$door_count . "<br>";
 }
}

// child class
class Trucks extends Cars {
 
 static function display()
 {
     //echo self::car_detail();
     echo parent::car_detail();
 }
}

//echo Cars::$wheel_count . "<br>";
//echo Cars::$door_count . "<br>";
//Cars::car_detail();
// for child class
Trucks::display();