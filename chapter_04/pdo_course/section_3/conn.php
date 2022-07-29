<?php

  //host, dbname, user, password 

  

  try {

  	$host     = "localhost";
	  $dbname   = "blogpost";
	  $user     = "root";
	  $password = "";

	  $conn = new PDO ("mysql:host=$host;dbname=$dbname", $user, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
     echo $e->getMessage();
  	//die("db error");
  }


  
 






 // echo "the rest of the page";