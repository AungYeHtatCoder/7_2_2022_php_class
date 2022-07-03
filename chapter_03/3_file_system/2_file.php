<?php 
$file = "buddha_data.txt";
// check the existence of the file
if (file_exists($file)) {
    // read the file
    $handle = fopen($file, "r");
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data;
} else {
    echo "The file $file does not exist.";
}