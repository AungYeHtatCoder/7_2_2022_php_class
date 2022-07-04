<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   <?php include("navbar.php"); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
        <div class="card">
         <div class="card-header">
           <h3>Login</h3>
         </div>
         <div class="card-body">
           <form action="login_process.php" method="post">
             <div class="form-group">
               <label for="username">Username</label>
               <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
             </div>
             <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
             </div>
             <input type="submit" class="btn btn-primary" value="Login">
           </form>
        </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>