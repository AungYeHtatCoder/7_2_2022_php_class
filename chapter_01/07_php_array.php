<?php
// php array
$first_array = array(1, 2, 3, 4, 5);
echo $first_array[0];

echo "<br>";
$second_array = array("Ashin", "Indavudha", "Ali", "Sarath", "NuNuHtway");
echo $second_array[0];
$food = array("pizza", "burger", "chicken", "cake");
echo "<br>";
echo $food[0];
$Fruit = array("apple", 45, 100, array("a", "b", "c"), "orange");
echo "<br>";
echo $Fruit[0];
echo "<br>";
echo $Fruit[1];
echo "<br>"; 
echo "<pre>";
echo print_r($Fruit);
echo "</pre>";
echo "<br>";
// associative array
$associative_array = array("first_name" => "Ashin", "last_name" => "Indavudha", "age" => "21");
echo " " . $associative_array["first_name"] . " " . $associative_array["last_name"] . " " . $associative_array["age"];
echo "<br>";
echo    "First Name is : " .$associative_array ["first_name"] . " Last Name is : " . $associative_array["last_name"] . " Age is :  " . $associative_array["age"];
echo "<br>";
echo "<pre>";
echo print_r($associative_array);
echo "</pre>";

// multidimensional array
$multidimensional_array = array(
    array("Ashin", "Indavudha", "21"),
    array("Ali", "Sarath", "22"),
    array("NuNuHtway", "Sarath", "23")
);
echo "<br>";
echo $multidimensional_array[0][0];
echo "<br>";
echo $multidimensional_array[1][1];
echo "<br>";
echo $multidimensional_array[2][2];
echo "<br>";
echo "<pre>";
echo print_r($multidimensional_array);
echo "</pre>";