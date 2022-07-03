<?php 
// get the weekday name of a particular date
echo date("l"); // return the weekday name of a particular date
echo "<br>";
echo date("l", strtotime("next monday")); // return the weekday name of a particular date
echo "<br>";
echo date("l", mktime(0, 0, 0, 1, 1, 2022)); // return the weekday name of a particular date