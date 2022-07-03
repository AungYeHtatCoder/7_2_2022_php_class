<?php 
$handle = fopen("data.txt", "r");
$data = fread($handle, filesize("data.txt"));
fclose($handle);
echo $data;
?>