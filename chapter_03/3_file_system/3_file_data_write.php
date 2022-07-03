<?php 
$file = "write_data.txt";
// string of data to be written
$data = "ဤအရှင်မြတ် အပါး၆၀သည် ဗုဒ္ဓသာသနာတွင် အဦးဆုံးသော သံဃအဖွဲ့အစည်းပင် ဖြစ်သည်။";
// open the file for writing
$handle = fopen($file, "w");
// write the data to the file
fwrite($handle, $data);
// close the file
fclose($handle);
?>
<?php 
// file open
$open_file = "write_data.txt";
$handle = fopen($open_file, "r");
// read the data
$data = fread($handle, filesize($open_file));
// close the file
fclose($handle);
// display the data
echo $data;
?>