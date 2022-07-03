<?php 
// excuted at the beginning of the script
$futureDate = mktime(0, 0, 0, date("m")+30, date("d") + 1, date("Y"));
echo date("d.m.Y H:i:s", $futureDate);