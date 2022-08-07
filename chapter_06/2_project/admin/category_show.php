<?php
include("config/db_con.php");

$category_name = "";
$id = "";
$created_at = "";
$updated_at = "";
$sql = "SELECT * FROM categories WHERE id = $_GET[id]";
$query_run = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($query_run))
{
$category_name = $row['category_name'];
$id = $row['id'];
$created_at = $row['created_at'];
$updated_at = $row['updated_at'];
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
       <i class="fas fa-table me-1"></i>
       Category Details
      </div>
      <div class="card-body">
       <!-- add to table content -->
       <table class="table">
        <tr>
         <th>ID</th>
         <td><?php echo $id; ?></td>

        </tr>
        <tr>
         <th>First Name</th>
         <td><?php echo $category_name; ?></td>
        </tr>
        <tr>
         <th>Email</th>
         <td><?php echo $created_at; ?></td>
        </tr>
        <tr>
         <th>Date</th>
         <td><?php echo $updated_at; ?></td>
        </tr>

       </table>

      </div>
     </div>
    </div>
   </main>
   <?php include("layouts/footer.php"); ?>