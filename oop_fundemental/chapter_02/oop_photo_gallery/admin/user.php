<?php require("layout/head.php"); ?>

<body class="sb-nav-fixed">
 <!-- top - nav -->
 <?php require("layout/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php require("layout/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">User Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <div class="row">



     </div>
     <div class="row">
      <!-- bar code -->
     </div>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       DataTable Example
      </div>
      <div class="card-body">
       <!-- datatable -->
       <?php
       include("layout/init.php");
       //include("layout/user.php");
              // normal method call
       // $user = new User();
       // $result_set = $user->find_all_users();

       // static method call
       $result_set = User::find_all_users();

       // data output
       while($row = mysqli_fetch_array($result_set)){
        echo "<table>";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "</tr>";
        echo "</table>";
       }

       echo "<br>"; 
       echo "<hr>";
       // user find by id
       $found_user = User::find_user_by_id(1);
       echo $found_user['username'];
       echo "<hr>";
       // assign array value to property
       $user = new User();
       $user->id = $found_user['id'];
       $user->username = $found_user['username'];
       $user->password = $found_user['password'];
       $user->first_name = $found_user['first_name'];
       $user->last_name = $found_user['last_name'];
       echo $user->id;
       echo $user->username;
       echo $user->password;
       echo $user->first_name;
       echo $user->last_name;

       echo "<hr>";
 // auto instantiate method call
       $user = User::instantation($found_user);

       echo $user->id;
       echo $user->username;
       echo $user->password;
       echo $user->first_name;
       echo $user->last_name;

       echo "<hr>";

      $users = User::find_all_user();
echo "foreach loop data output";
echo "<br>";
foreach ($users as $user) {
    //echo $user['username'];
      echo "<table class='table'>";
      echo "<tr>";
      echo "<td>".$user->id ."</td>";
      echo "<td>".$user->username ."</td>";
      echo "<td>".$user->password ."</td>";
      echo "<td>".$user->first_name ."</td>";
      echo "<td>".$user->last_name ."</td>";
      echo "</tr>";
      echo "</table>";
}

            echo "<hr>";
           
       ?>
      </div>
     </div>
    </div>
   </main>
   <?php require("layout/footer.php"); ?>
  </div>
 </div>
 <?php require("layout/js.php"); ?>
</body>

</html>