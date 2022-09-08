<?php 
include("../vendor/autoload.php");

use Libs\Databases\PostTable;
use Libs\Databases\MySQL;
use Libs\Databases\CategoryTable;


$table = new PostTable(new MySQL());
$posts = $table->getAllPosts();


include("includes/head.php"); 
?>

<body class="sb-nav-fixed">
 <?php include("includes/top_header.php"); ?>
 <div id="layoutSidenav">
  <?php include("includes/sidebar.php"); ?>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><?php echo $auth->name; ?> : Dashboard</li>
     </ol>

     <?php if(isset($_GET['success']) && $_GET['success'] == true){ ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Post has been created.
     </div>
     <?php } else if(isset($_GET['error']) && $_GET['error'] == true){ ?>
     <div class="alert alert-danger">
      <strong>Error!</strong> Post has not been updated.
     </div>
     <?php } ?>

     <?php if(isset($_GET['delsuccess'])) : ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Post has been Deleted.
     </div>
     <?php endif; ?>

     <?php if(isset($_GET['addsuccess'])) : ?>
     <div class="alert alert-success">
      <strong>Success!</strong> Post has been Created New Record.
     </div>
     <?php endif; ?>
     <?php //include("includes/top_card.php"); ?>
     <?php //include("includes/bar_chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       <h4>Post List <span class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+
         Add
         Post</span></h4>
      </div>
      <div class="card-body">
       <!-- Add Datatable -->
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>ID</th>
          <th>Post Title</th>
          <th>Category</th>
          <th>Description</th>
          <th>User </th>
          <th>Created At</th>
          <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <?php foreach($posts as $post) : ?>
         <tr>
          <td><?= $post->id; ?></td>
          <td><?= $post->title; ?></td>
          <td><?= $post->category; ?></td>
          <td><?= substr($post->description, 0, 20); ?></td>
          <td><?= $post->user ?></td>
          <td><img src="../_actions/photos/<?= $post->file_name ?>" width="50px" height="50px" alt=""></td>
          <td>
           <?php if($auth->value == '3'){ ?>
           <a href="category_edit.php?id=<?= $post->id; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
           <?php } ; ?>
           <a href="category_detail.php?id=<?= $post->id; ?>" class="btn btn-info"><i class="fa fa-eye"
             aria-hidden="true"></i></a>
           <?php if($auth->value == '3'){ ?>
           <a href="../_actions/category_delete.php?id=<?= $post->id; ?>" class="btn btn-danger"><i class="fa fa-trash"
             aria-hidden="true"></i></a>
           <?php } ; ?>
         </tr>
         <?php endforeach; ?>
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
        <h5 class="modal-title" id="exampleModalLabel">New Post Create</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <form action="../_actions/post_create.php" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
          <label for="Title Name" class="form-label">Post Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Enter Your Post Title">
         </div>
         <div class="mb-3">
          <select name="category_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
           <option selected>Select Your Category</option>
           <?php 
           $category_table = new CategoryTable(new MySQL());
           $categories = $category_table->GetCategory();
           foreach ($categories as $category) :
           ?>
           <option value="<?= $category->id ?>"><?= $category->category_name; ?></option>
           <?php endforeach; ?>
          </select>
         </div>
         <div class="mb-3">
          <textarea name="description" class="form-control" placeholder="Write Your Description Here"
           id="floatingTextarea"></textarea>
          <label for="floatingTextarea">Description</label>
         </div>
         <div class="input-group mb-3">
          <input type="file" name="file_name" class="form-control" id="inputGroupFile02">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
         </div>
         <input type="hidden" name="user_id" value="<?php echo $auth->id; ?>">
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Create New Post">
         </div>
        </form>
       </div>

      </div>
     </div>
    </div>
   </main>
   <?php include("includes/footer.php"); ?>