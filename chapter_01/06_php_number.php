<?php 
// php number 
$first_number = 1;
$second_number = 2;
$third_number = 3.213;

echo $first_number + $second_number;
echo "<br>";

echo "Ceil". ceil($third_number);
echo "<br>";
echo "Floor". floor($third_number);
echo "<br>";
echo "Round". round($third_number);
echo "<br>";
echo "Random". rand(1, 100);
echo "<br>";
echo "First Number is : {$first_number}" . ": " . gettype($first_number);
echo "<br>";
echo "Second Number is : {$second_number}" . ": " . is_int($second_number);
echo "<br>";
echo "Third Number is : {$third_number}" . ": " . is_int($third_number);
echo "<br>";
echo decbin(3);
echo "<br>";
echo dechex(3);
echo "<br>";
echo decoct(3);
echo "<br>";
echo bindec(1101);
echo "<br>";
echo hexdec("0x3");
echo "<br>";
echo sqrt(9);
echo "<br>";
echo pow(2, 3);
echo "<br>";
echo max(1, 2, 3, 4, 5);
echo "<br>";
echo min(1, 2, 3, 4, 5);
echo "<br>";
echo abs(-3);
echo "<br>";
echo round(3.7);
echo "<br>";
echo round(3.4);
echo "<br>";