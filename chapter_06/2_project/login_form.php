   <?php include("layouts/head.php"); ?>

   <body>
    <?php include("layouts/navbar.php"); ?>
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mt-3">
       <div class="card">
        <div class="card-header">
         <h1>user login</h1>
        </div>
        <div class="card-body">
         <form action="actions/login.php" method="POST">
          <div class="mb-3">
           <label for="email" class="form-label">Emaill</label>
           <input type="email" class="form-control" id="" name="email" placeholder="Enter Your Email ">
          </div>
          <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" class="form-control" name="password" id="password">
          </div>
          <input type="submit" name="login" class="btn btn-primary" value="Login">
         </form>
        </div>
       </div>
       <div class="col-lg-4 mt-3">

       </div>
      </div>
     </div>
     <?php include("layouts/footer.php"); ?>