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
     <h1 class="mt-4">Post Dashboard</h1>
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
        + Add Post
       </button>
      </div>
      <div class="card-body">
       <!-- add to table content -->
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>Category Name</th>
          <th>Title</th>
          <th>Desc</th>
          <th>Image</th>

          <th>Action</th>

         </tr>
        </thead>
        <tfoot>
         <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>Category Name</th>
          <th>Title</th>
          <th>Desc</th>
          <th>Image</th>

          <th>Action</th>

         </tr>
        </tfoot>
        <tbody>
         <?php 
       include("config/db_con.php");
       //$post_data = "SELECT posts.*, users.username AS name, FROM posts LEFT JOIN users ON posts.user_id = users.id";
       
       // get all post data
       $sql = "SELECT posts.*, users.username AS name, categories.category_name AS cat_name FROM posts LEFT JOIN users ON posts.user_id = users.id LEFT JOIN categories ON posts.category_id = categories.id";
       $result = mysqli_query($link, $sql);
       

       while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['cat_name']."</td>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td><img src='actions/images/".$row['file_name']."' width='100' height='100'></td>";
        //echo "<td> 'actions/images/'" .$row['file_name']."</td>";
        echo "<td>";
        echo "<a href='post_edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>";
        echo "<a href='post_delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>";
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
        <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <form action="actions/post_create.php" method="POST" enctype="multipart/form-data">
         <div class="input-group">

          <select name="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
           <option selected>Select Category</option>

           <?php
           include("../config/db_con.php");

           // get all categories
           $sql = "SELECT * FROM categories";
           $result = mysqli_query($link, $sql);
           while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['category_name'] . "</option>";
           }
           ?>

          </select>
         </div>
         <div class="mb-3">
          <label for="Post Title" class="form-label">Post Title</label>
          <input type="text" class="form-control" id="" name="title" placeholder="Enter Your Post Title ">
         </div>
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
   </main>
   <?php include("layouts/footer.php"); ?>