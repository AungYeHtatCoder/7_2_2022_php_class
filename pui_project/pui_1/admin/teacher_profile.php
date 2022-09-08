<?php 
// include("../vendor/autoload.php");
// use Helpers\Auth;
// $auth = Auth::check();
include("../vendor/autoload.php");
use Libs\Databases\MySQL;
use Libs\Databases\ProgramTable;
use Libs\Databases\ClassTable;
use Libs\Databases\SubjectTable;
?>
<?php include("includes/head.php"); ?>

<body class="sb-nav-fixed">
 <?php //include("includes/top_navbar.php"); ?>
 <div id="layoutSidenav">

  <?php include("includes/sidebar.php"); ?>

  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Teacher Profile Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><?= $auth->name ?></li>
     </ol>
     <?php //include("includes/top_card.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       If you are a teacher, you must fill to complete your infomation <span><a href=""
         class="btn btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Teacher Info
         Fill </a></span>
      </div>
      <div class=" card-body">
       <!-- add to datatable -->
      </div>
      <div class="container">
       <div class="main-body">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
         <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Teacher</a></li>
          <li class="breadcrumb-item active" aria-current="page">Teacher Profile</li>
         </ol>
        </nav>
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
         <div class="col-md-4 mb-3">
          <div class="card">
           <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
             <img src="../_actions/photos/<?= $auth->photo ?>" alt="Admin" class="rounded-circle" width="150">
             <div class="mt-3">
              <h4><?= $auth->name ?></h4>

              <p class="text-muted font-size-sm"><?= $auth->address ?></p>

              <form action="../_actions/user_update.php" method="POST" enctype="multipart/form-data">
               <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <input type="file" class="from-control" name="photo">
               </div>
               <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <input type="submit" value="Update Profile" class="btn btn-primary">
               </div>
              </form>
             </div>
            </div>
           </div>
          </div>

         </div>
         <div class="col-md-8">
          <div class="card mb-3">
           <div class="card-body">
            <div class="row">
             <div class="col-sm-3">
              <h6 class="mb-0">Full Name</h6>
             </div>
             <div class="col-sm-9 text-secondary">
              <?= $auth->name ?>
             </div>
            </div>
            <hr>
            <div class="row">
             <div class="col-sm-3">
              <h6 class="mb-0">Email</h6>
             </div>
             <div class="col-sm-9 text-secondary">
              <?= $auth->email ?>
             </div>
            </div>
            <hr>
            <div class="row">
             <div class="col-sm-3">
              <h6 class="mb-0">Phone</h6>
             </div>
             <div class="col-sm-9 text-secondary">
              <?= $auth->phone ?>
             </div>
            </div>
            <hr>

            <hr>
            <div class="row">
             <div class="col-sm-3">
              <h6 class="mb-0">Address</h6>
             </div>
             <div class="col-sm-9 text-secondary">
              <?= $auth->address ?>
             </div>
            </div>
            <hr>
            <div class="row">

             <div class="row mt-3">
              <div class="col-sm-3">
               <h6 class="mb-0 badge bg-secondary">Change Password</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               <form action="../_actions/change_pw.php" method="POST">
                <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email address</label>
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" value="<?php echo $auth->email; ?>">
                 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Password</label>
                 <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                  value="<?php //echo $auth->password; ?>" placeholder="Enter Your Change Password">
                </div>
                <div class="mb-3">
                 <input type="submit" class="btn btn-primary" value="Update Password">
                </div>
               </form>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
   </main>

   <!-- teacher information modal start -->
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Teacher Infomation</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="../_actions/tr_info_create.php" method="POST">
        <div class="mb-3">
         <label for="TeacherName" class="form-label">TeacherName</label>
         <input type="text" name="tr_name" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="mb-3">
         <label for="Phone" class="form-label">Phone</label>
         <input type="text" name="phone" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="mb-3">
         <label for="SecondaryPhone" class="form-label">SecondaryPhone</label>
         <input type="text" name="secondary_phone" class="form-control" placeholder="Enter Your Secondary Phone">
        </div>
        <div class="form-floating">
         <textarea name="address" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px"></textarea>
         <label for="floatingTextarea2">Address</label>
        </div>

        <div class="form-floating">
         <textarea name="fix_address" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px"></textarea>
         <label for="floatingTextarea2">Fixed Address</label>
        </div>

        <div class="form-floating">
         <textarea name="experience" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px"></textarea>
         <label for="floatingTextarea2">Learning Experience</label>
        </div>
        <div class="mb-3">
         <label for="AcademicYear" class="form-label">AcademicYear</label>
         <input type="text" name="academic_year" class="form-control" placeholder="Enter Your AcademicYear">
        </div>
        <select name="program_id" class="form-select mt-3" aria-label="Default select example">
         <option selected>Open this select your programm</option>
         <?php  
          $table = new ProgramTable(new MySQL());
          $program_data = $table->GetProgramAllData();
          foreach($program_data as $program) :
          ?>
         <option value="<?= $program->id ?>"><?= $program->program_name; ?></option>
         <?php endforeach; ?>
        </select>

        <select name="class_id" class="form-select mt-3" aria-label="Default select example">
         <option selected>Open this select Your Class</option>
         <?php  
            $table = new ClassTable(new MySQL());
            $class_data = $table->GetClassAllData();
            foreach($class_data as $class) :
            ?>
         <option value="<?= $class->id ?>"><?= $class->class_name; ?></option>
         <?php endforeach; ?>
        </select>

        <select name="subject_id" class="form-select mt-3" aria-label="Default select example">
         <option selected>Open this select subject</option>
         <?php  
              $table = new SubjectTable(new MySQL());
              $subject_data = $table->GetSubjectAllData();
              foreach($subject_data as $subject) :
              ?>
         <option value="<?= $subject->id ?>"><?= $subject->subject_name; ?></option>
         <?php endforeach; ?>
        </select>
        <input type="hidden" name="user_id" value="<?= $auth->id; ?>">
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Update Tr Info</button>
        </div>
       </form>
      </div>

     </div>
    </div>
   </div>
   <!-- modal end -->
   <?php include("includes/footer.php"); ?>

   <script>
   $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
   });
   </script>