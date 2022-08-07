<?php 
include("config/db_con.php");
// get category id
$category_id = '';
$category_name = '';
$query = "SELECT * FROM categories WHERE id = $_GET[id]";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_assoc($result)){
    $category_name = $row['category_name'];
}


// category edit
if(isset($_POST['update'])){
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $query = "UPDATE categories SET category_name = '$category_name' WHERE id = $_GET[id]";
    $result = mysqli_query($link, $query);
    if($result){
        //echo "Category Updated Successfully";
        header("Location: category_index.php");
    }else{
        echo "Category Not Updated";
    }
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
     <h1 class="mt-4">Category Update</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <?php include("layouts/top_card.php"); ?>
     <div class="row">
      <!-- to add bar area  -->
     </div>
     <div class="card mb-4">
      <div class="card-header">
       Category Update
      </div>
      <div class="card-body">
       <!-- add to table content -->
       <form action="<?php $_PHP_SELF; ?>" method="POST">
        <div class="mb-3">
         <label for="Category" class="form-label">Category Name</label>
         <input type="text" class="form-control" name="category_name" id="category_name"
          value="<?php echo $category_name; ?>">
        </div>

        <input type="submit" name="update" class="btn btn-primary" value="Create New Category">
       </form>
      </div>
     </div>
    </div>
   </main>
   <?php include("layouts/footer.php"); ?>