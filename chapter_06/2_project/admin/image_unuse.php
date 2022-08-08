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
     <h1 class="mt-4">Gallery Dashboard</h1>
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
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Upload File
       </button>
      </div>
      <div class="card-body">
       <!-- add to table content -->
       <div class="col-xl-6">
        <div class="card mb-4">
         <div class="card-header">
          <i class="fas fa-chart-area me-1"></i>
          Image Gallery
         </div>
         <div class="card-body"><?php
// Include the database configuration file
include ("config/db_con.php");

// Get images from the database
$query = $link->query("SELECT * FROM images ORDER BY created_at DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $id = $row["id"];
        $imageURL = 'actions/images/'.$row["file_name"];
        $description = $row["description"];
?>
          <img src="<?php echo $imageURL; ?>" alt="" class="img-thumbnail" />
          <p><?php echo $description; ?></p>
          <?php }
}else{ ?>
          <p>No image(s) found...</p>
          <?php } ?>
         </div>
        </div>
       </div>

      </div>
     </div>

     <!-- Button trigger modal -->
     <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
     </button> -->

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form action="actions/image_upload.php" method="POST" enctype="multipart/form-data">
          <div class="input-group">
           <span class="input-group-text">With textarea</span>
           <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
          </div>
          <div class="input-group mb-3">
           <label class="input-group-text" for="inputGroupFile01">Upload</label>
           <input type="file" class="form-control" name="file" id="inputGroupFile01">
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <input type="submit" name="upload" class="btn btn-primary" value="Upload File">
          </div>
         </form>
        </div>

       </div>
      </div>
     </div>
    </div>
   </main>
   <?php include("layouts/footer.php"); ?>