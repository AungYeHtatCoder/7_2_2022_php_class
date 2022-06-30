<?php 
class Cars{
 function greething()
 {
    
 }

 function sayHello()
 {
     echo "Hello";
 }
}
$the_method = get_class_methods('Cars');

foreach ($the_method as $method) {
    echo $method . "<br>";
}