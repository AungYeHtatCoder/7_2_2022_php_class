<?php 
include("config.php");
// attempt select query execution
$sql = "SELECT * FROM `users`";

if($result = mysqli_query($link, $sql)){
 if(mysqli_num_rows($result) > 0){
  echo "<table border='1' cellpadding='5' cellspacing='0'>";
  echo"<tr>";
  echo"<th>ID</th>";
  echo"<th>First Name</th>";
  echo"<th>Last Name</th>";
  echo"<th>Email</th>";
  echo"<th>Registration Date</th>";
  echo"</tr>";
  while($row = mysqli_fetch_array($result)){
   echo"<tr>";
   echo"<td>".$row['id']."</td>";
   echo"<td>".$row['firstname']."</td>";
   echo"<td>".$row['lastname']."</td>";
   echo"<td>".$row['email']."</td>";
   echo"<td>".$row['reg_date']."</td>";
   echo"</tr>";
  }
  echo"</table>";
  // Free result set
  mysqli_free_result($result);
 }else{
  echo "No records matching your query were found.";
 }
}else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);