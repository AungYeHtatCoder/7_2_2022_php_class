<?php 
class Cars {
 // class access modifier
 // public, private, protected
  
 public $wheel_count = 4; // public is default
 private $door_count = 4; // only accessible within this class
 protected $seat_count = 4; // accessible within this class and child classes
  
 function car_detail() {
     echo $this->wheel_count . "<br>";
     echo $this->door_count . "<br>";
     echo $this->seat_count . "<br>";
 }
 
}

$bmw = new Cars();
echo $bmw->wheel_count . "<br>";
echo "<hr>";
$bmw->car_detail();
class Trucks extends Cars {
 
 function Call_Car_Detail() {
     echo $this->car_detail();
 }
}

$tacoma = new Trucks();
echo "<hr>";
$tacoma->Call_Car_Detail();