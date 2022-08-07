<?php 

session_start();
    include("function.php");
    $auth = check();
include("config/db_con.php");
$category_name_error = "";

// create category
if(isset($_POST['create'])){
    $category_name = $_POST['category_name'];
    if($category_name_error == ""){
        echo "Category Name is required";
    }
    if($category_name !== ""){
        $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
        
    }
    
    // $result = mysqli_query($link, $query);
    // if($result){
    //     echo "Category Created Successfully";
    //     //header("Location: ../category_index.php");
    // }else{
    //     echo "Category Not Created";
    // }
}
?>
<?php include("layouts/head.php"); ?>

<body class="sb-nav-fixed">
 <?php include("layouts/top_navbar.php"); ?>
 <div id="layoutSidenav">
  <div id="layoutSidenav_nav">
   <?php include("layouts/sidebar.php"); ?>
  </div>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <?php include("layouts/top_card.php"); ?>
     <div class="row">
      <!-- to add bar area  -->
     </div>
     <div class="card mb-4">
      <div class="card-header">
       <a href="" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add New
        Category</a>
      </div>
      <div class="card-body">
       <!-- add to table content -->
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Create Date</th>
          <th>Action</th>

         </tr>
        </thead>
        <tfoot>
         <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Create Date</th>
          <th>Action</th>

         </tr>
        </tfoot>
        <tbody>
         <?php 
       include("config/db_con.php");
       $sql = "SELECT * FROM categories";
       $result = mysqli_query($link, $sql);
       
       //count($result);
       while($row = mysqli_fetch_assoc($result)){
        //echo count($row);
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['category_name']."</td>";
        echo "<td>".$row['created_at']."</td>";
        echo "<td>";
        echo "<a href='category_edit.php?id=".$row['id']."' class='btn btn-primary'>Edit </a>";
        echo "<a href='actions/category_del.php?id=".$row['id']."' class='btn btn-danger'> Delete</a>";
        echo "<a href='category_show.php?id=".$row['id']."' class='btn btn-warning'>Show</a>";
        echo "</td>";
        echo "</tr>";
       }
       
       ?>
        </tbody>
       </table>
      </div>
     </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <form action="actions/category_create.php" method="POST">
         <div class="mb-3">
          <label for="Category" class="form-label">Category Name</label>
          <input type="text" class="form-control" name="category_name" id="category_name"
           placeholder="Enter Category Name">
          <span class="text-danger"><?php echo $category_name_error; ?></span>
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" name="create" class="btn btn-primary" value="Save Category">
         </div>
         <!-- <input type="submit" name="create" class="btn btn-primary" value="Create New Category"> -->
        </form>
       </div>

      </div>
     </div>
    </div>
   </main>
   <?php include("layouts/footer.php"); ?>