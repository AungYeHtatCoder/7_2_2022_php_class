<?php 
class Cars{
  var $wheel_count = 4;
  var $door_count = 4;

  function car_details()
  {
      return $this->wheel_count . " wheels and " . $this->door_count . " doors";
  }
}

// instantiate the class
$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count;
echo "<hr>";
echo $mercedes->wheel_count;
echo "<hr>";
echo $mercedes->wheel_count = 10;

echo "<hr>";
echo $bmw->car_details();