<?php 
session_start();
include("admin/config/db.php");
$errors = '';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // users table with join role table
    
    $query = "SELECT users.*, roles.name As role, roles.value FROM users LEFT JOIN roles ON users.role_id = roles.id WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);

    if($count > 0)
    {
     $row = mysqli_fetch_assoc($result);
    //  print_r($row);
    //  die();
     $_SESSION['ROLE'] = $row['role'];
     $_SESSION['VALUE'] = $row['value'];
     if($row['value'] == '3'){
         //$_SESSION['USER_ID'] = $row['id'];
         header('location: admin/dashboard.php');
     }if($row['value'] == '1'){
         //$_SESSION['USER_ID'] = $row['id'];
         header('location: admin/user.php');
     }
    }else{
        $errors = "Invalid username or password";
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
      <h4>Bootstrap 4</h4>
     </div>
     <div class="card-body">
      <form action="<?php $_PHP_SELF; ?>" method="POST">
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
       </div>
       <div class="mb-3 form-check">
        <input type="submit" class="btn btn-primary" value="Login" name="login">
        <?php echo $errors; ?>
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