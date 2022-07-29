<?php 
// host, dbname, user, password

try {
 $host = 'localhost';
 $dbname = 'blogpost';
 $user = 'root';
 $password = '';
 $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 echo "Connection failed: " . $e->getMessage();
}
// to check if the connection is successful
// if($conn != null) {
//  echo "Connected successfully";
// }else{
//  echo "Connection failed";

// }
?>