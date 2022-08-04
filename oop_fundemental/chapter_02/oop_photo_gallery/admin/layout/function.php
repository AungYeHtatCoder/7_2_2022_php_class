<?php 

function __autoload($class)
{
$class = strtolower($class);
$the_path = "layout/{$class}.php";
if(file_exists($the_path))
{
require_once($the_path);
}
else
{
die("This file name {$class}.php was not found");
}
}