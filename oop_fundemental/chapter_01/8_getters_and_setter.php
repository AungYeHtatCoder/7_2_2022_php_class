<?php
class Cars {
 private $wheel_count;

 function get_value() {
  return $this->wheel_count;
 }

 function set_value() {
  $this->wheel_count = 10;
 }

}
$bmw = new Cars();
$bmw->set_value();
echo $bmw->get_value();