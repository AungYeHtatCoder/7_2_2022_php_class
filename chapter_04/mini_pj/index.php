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
      <h1>User Lists <span><a href="create.php" class="btn btn-primary">Create User</a></span></h1>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th scope="col">ID</th>
         <th scope="col">First</th>
         <th scope="col">Last</th>
         <th scope="col">Email</th>
         <th scope="col">Date</th>
         <th scope="col">Action</th>

        </tr>
       </thead>
       <tbody>
        <?php 
        include("config.php");
        $sql = "SELECT * FROM users";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["id"]. "</td>";
          echo "<td>" . $row["firstname"]. "</td>";
          echo "<td>" . $row["lastname"]. "</td>";
          echo "<td>" . $row["email"]. "</td>";
          echo "<td>" . $row["reg_date"]. "</td>";
          echo "<td> <a href='edit.php?id=" . $row["id"] . "' class='btn btn-primary'>Edit</a> <a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a> </td>";
          echo "</tr>";
         }
        } else {
         echo "0 results";
        }
        ?>


       </tbody>
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