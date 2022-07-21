<?php 
include("config.php");
// user create 
if (isset($_POST['create'])) {
 $firstname = mysqli_real_escape_string($link, $_POST['firstname']);
 $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
 $email = mysqli_real_escape_string($link, $_POST['email']);
 //$password = mysqli_real_escape_string($link, $_POST['password']);
 $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
 if (mysqli_query($link, $sql)) {
  //echo "New record created successfully";
  header("Location: index.php");
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
 }
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
      <h1>User Create <span><a href="index.php" class="btn btn-primary">Back </a></span></h1>
     </div>
     <div class="card-body">
      <form action="" method="POST">
       <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" name="firstname" placeholder="First Name">
       </div>
       <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="mb-3">
        <input type="submit" name="create" class="btn btn-primary" value="Create User">

       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>