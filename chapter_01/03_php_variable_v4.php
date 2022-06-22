<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>predefined variables</title>
</head>

<body>
 <h1>predefined variables</h1>
 <?php 
   // create a shorthand version of the variable names;
   $file = $_SERVER['SCRIPT_FILENAME'];
   $user = $_SERVER['HTTP_USER_AGENT'];
   $server = $_SERVER['SERVER_SOFTWARE'];
   // print the name of this script
   echo '<p>You are running the file: '.$file.'</p>';
   echo "<br>";
   // print the user agent
   echo '<p>You are using: '.$user.'</p>';
   echo "<br>";
   // print the server software
   echo '<p>This server is running: '.$server.'</p>';
 ?>
</body>

</html>