<?php 
class Cars {
 public $wheel_count = 4; // public is default
 static $door_count = 4; // static is default
 // constructor
 function __construct()
 {
     echo $this->wheel_count . "<br>";
     echo self::$door_count++ . "<br>";
 }

 // destructor
 function __destruct()
 {
     echo $this->wheel_count . "<br>";
     echo self::$door_count-- . "<br>";
 }
 
}
// constructor is called when object is created
$bmw = new Cars();
echo "<br>";
$mercedes = new Cars();
// destructor is called when object is destroyed