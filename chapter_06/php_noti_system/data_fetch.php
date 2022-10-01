<?php 
// db connection
include("config/db_con.php");
// query
$data_fetch = "SELECT * FROM user ORDER BY userid DESC LIMIT 5";
// execute query
$result = mysqli_query($link, $data_fetch);
// fetch data
while($row = mysqli_fetch_array($result)) :
?>
<tr>
 <td><?= $row['firstname'] ?></td>
 <td><?= $row['lastname'] ?></td>
 <td>
  <a href="edit.php?userid=<?= $row['userid'] ?>" class="btn btn-info">Edit</a>
  <a href="delete.php?userid=<?= $row['userid'] ?>" class="btn btn-danger">Delete</a>
 </td>



</tr>
<?php endwhile; ?>