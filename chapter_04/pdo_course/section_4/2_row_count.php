<?php 
require('conn.php');
$rows = $conn->query("SELECT * FROM posts");
//print_r($rows->rowCount());

if($rows->rowCount() > 0) {
  while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . "<br>";
    echo $row['body'] . "<br>";
    echo $row['created_at'] . "<br>";
  }

}else{
  echo "No data";
}