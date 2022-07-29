<?php
include("config.php");
// users record edit
$firstname = "";
$lastname = "";
$email = "";
$id = "";
$reg_date = "";
$sql = "SELECT * FROM users WHERE id = $_GET[id]";
$query_run = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($query_run))
{
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$id = $row['id'];
$reg_date = $row['reg_date'];
}
?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h1>User Detail <span><a href="index.php" class="btn btn-primary">Back</a></span> </h1>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>ID</th>
        <td><?php echo $id; ?></td>

       </tr>
       <tr>
        <th>First Name</th>
        <td><?php echo $firstname; ?></td>
       </tr>
       <tr>
        <th>Email</th>
        <td><?php echo $email; ?></td>
       </tr>
       <tr>
        <th>Date</th>
        <td><?php echo $reg_date; ?></td>
       </tr>

      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>