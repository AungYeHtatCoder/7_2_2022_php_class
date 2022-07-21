<?php 
include("config.php");
// users records edit
    $firstname = "";
    $lastname = "";
    $email = "";
    $id = "";
    $query = "select * from users where id = $_GET[id]";
    $query_run = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $id = $row['id'];
    }
// user update
if (isset($_POST['update'])) {
 $id = $_GET['id'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";
 if (mysqli_query($link, $sql)) {
  //echo "Record updated successfully";
  header("Location: index.php");
 } else {
  echo "Error updating record: " . mysqli_error($link);
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
        <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
       </div>
       <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Last Name"
         value="<?php echo $lastname; ?>">
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
         value="<?php echo $email; ?>">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="mb-3">
        <input type="submit" name="update" class="btn btn-primary" value="Update User">

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