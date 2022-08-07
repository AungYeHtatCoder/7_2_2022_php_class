   <?php include("layouts/head.php"); ?>

   <body>
    <?php include("layouts/navbar.php"); ?>
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mt-3">
       <div class="card">
        <div class="card-header">
         <h1>User Register Form</h1>
        </div>
        <div class="card-body">
         <form action="actions/user_create.php" method="POST">
          <div class="mb-3">
           <label for="" class="form-label">Username</label>
           <input type="text" class="form-control" id="" name="username" placeholder="Enter Your name ">
          </div>

          <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address</label>
           <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" class="form-control" name="password" id="password">
          </div>
          <div class="mb-3">
           <label for="phone" class="form-label">Phone</label>
           <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone ">
          </div>
          <div class="mb-3">
           <label for="address" class="form-label">Address</label>
           <textarea name="address" id="" cols="30" rows="10"></textarea>
          </div>
          <input type="submit" name="create" class="btn btn-primary" value="Register">
         </form>
        </div>
       </div>
      </div>
      <div class="col-lg-4 mt-3">

      </div>
     </div>
    </div>
    <?php include("layouts/footer.php"); ?>