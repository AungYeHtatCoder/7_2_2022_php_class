   <?php 
   session_start();
   include("function.php");
   $auth = check();
   include("layouts/head.php"); 

   // logined user deatils
   $user_email = $_SESSION['username'];
   //echo $user_email;
   $user_email = $_SESSION['email'];
   //echo "<br>";
   //echo $user_email;
   $user_phone = $_SESSION['phone'];
   //echo "<br>";
   //echo $user_phone;
   $user_adderss = $_SESSION['address'];

   ?>

   <body>
    <?php include("layouts/navbar.php"); ?>
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mt-3">
       <div class="card">
        <div class="card-header">

         <h1 style="color: red;"><?php echo $auth; ?> <span>Profile</span></h1>
        </div>
        <div class="card-body">
         <table class="table">
          <tr>
           <th>Email</th>
           <td><?php echo $user_email; ?></td>
          </tr>
          <tr>
           <th>Phone</th>
           <td><?php echo $user_phone; ?></td>
          </tr>
          <tr>
           <th>Address</th>
           <td><?php echo $user_adderss; ?></td>
          </tr>
         </table>
        </div>
       </div>
      </div>
      <div class="col-lg-4 mt-3">

      </div>
     </div>
    </div>
    <?php include("layouts/footer.php"); ?>