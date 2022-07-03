<?php 
// create the timestamp a particular date

// mktime(hour, minute, second, month, day, year)

$timestamp = mktime(0, 0, 0, 1, 1, 2022);
echo $timestamp;
echo "<br>";
echo date("d.m.Y H:i:s", $timestamp);