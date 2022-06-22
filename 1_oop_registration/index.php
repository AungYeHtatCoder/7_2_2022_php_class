<?php 
include("reg_process.php");
$db = new db();
// $user_data = $db->get_user_data();
// echo"<pre>";
// print_r($user_data);
// echo"</pre>";


?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>registration form using with php oop</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
 <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
   <a class="navbar-brand" href="#">Navbar</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
       aria-expanded="false">
       Dropdown
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
       <li><a class="dropdown-item" href="#">Action</a></li>
       <li><a class="dropdown-item" href="#">Another action</a></li>
       <li>
        <hr class="dropdown-divider">
       </li>
       <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
     </li>
     <li class="nav-item">
      <a class="nav-link disabled">Disabled</a>
     </li>
    </ul>
    <form class="d-flex" role="search">
     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
   </div>
  </div>
 </nav>
 <div class="container mt-5">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header" style="padding-top: 10px; padding-bottom: 10px">
      <h6 style="text-align: center;">User Data</h6>
      <div class="float-end">
       <form action="search.php" class="d-flex" role="search" method="POST">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <input class="btn btn-outline-success" type="submit" value="Search">
       </form>
      </div>

     </div>
     <div class="card-body">
      <?php $db->get_user_data(); ?>
     </div>
    </div>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>