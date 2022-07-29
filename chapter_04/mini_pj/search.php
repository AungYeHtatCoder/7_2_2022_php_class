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
      <h1>Your Search Result <span><a href="index.php" class="btn btn-primary">Back</a></span></h1>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th scope="col">ID</th>
         <th scope="col">FirstName</th>
         <th scope="col">LastName</th>
         <th scope="col">Email</th>
         <th scope="col">Date</th>
         <th scope="col">Action</th>
        </tr>
       </thead>
       <tbody>
        <?php 
           include("config.php");
           // user search
           if(isset($_POST['search'])){
             $search = $_POST['search'];
             $sql = "SELECT * FROM users WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR email LIKE '%$search%'";
             $result = mysqli_query($link, $sql);
             if(mysqli_num_rows($result) > 0){
               while ($row = mysqli_fetch_assoc($result)) {
                 echo "<tr>";
                 echo "<td>".$row['id']."</td>";
                 echo "<td>".$row['firstname']."</td>";
                 echo "<td>".$row['lastname']."</td>";
                 echo "<td>".$row['email']."</td>";
                 echo "<td>".$row['reg_date']."</td>";
                 echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a> <a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
                 <a href='show.php?id=".$row['id']."' class='btn btn-warning'>Show</a>
                 </td>";
               }
             }else{
               echo "0 result";
             }
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