<?php 
include("../vendor/autoload.php");
use Helpers\Auth;
$auth = Auth::check();
?>

<?php include("top_navbar.php") ?>
<div id="layoutSidenav_nav">
 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
  <div class="sb-sidenav-menu">
   <div class="nav">
    <div class="sb-sidenav-menu-heading">Core</div>
    <a class="nav-link" href="index.html">
     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
     Dashboard
    </a>
    <div class="sb-sidenav-menu-heading">Interface</div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
     aria-expanded="false" aria-controls="collapseLayouts">
     <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
     User Management
     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <?php if($auth->value == '3'){ ?>
    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
     <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="user_index.php">User</a>
      <a class="nav-link" href="role_index.php">Role</a>

     </nav>
    </div>
    <?php } ?>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
     aria-expanded="false" aria-controls="collapsePages">
     <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
     Schoole Management
     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
     <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth"
       aria-expanded="false" aria-controls="pagesCollapseAuth">
       Programmes & Courses
       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
       <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="tr_index.php">Teacher List</a>
        <a class="nav-link" href="tr_info_index.php">Teacher Info</a>
        <a class="nav-link" href="program_index.php">Program List</a>
        <a class="nav-link" href="class_index.php">Class</a>
        <a class="nav-link" href="subject_index.php">Subject</a>
       </nav>
      </div>
      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError"
       aria-expanded="false" aria-controls="pagesCollapseError">
       Grade & Teacher
       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
       data-bs-parent="#sidenavAccordionPages">
       <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="g_one_tr_index.php">Grade One TR</a>
        <a class="nav-link" href="404.html">404 Page</a>
        <a class="nav-link" href="500.html">500 Page</a>
       </nav>
      </div>
      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError"
       aria-expanded="false" aria-controls="pagesCollapseError">
       Error
       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
       data-bs-parent="#sidenavAccordionPages">
       <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="401.html">401 Page</a>
        <a class="nav-link" href="404.html">404 Page</a>
        <a class="nav-link" href="500.html">500 Page</a>
       </nav>
      </div>
     </nav>
    </div>

    <!-- student management start -->
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_Pages_student"
     aria-expanded="false" aria-controls="collapsePages">
     <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
     Student Management
     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapse_Pages_student" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
     <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse_Auth"
       aria-expanded="false" aria-controls="pagesCollapseAuth">
       Student
       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="pagesCollapse_Auth" aria-labelledby="headingOne"
       data-bs-parent="#sidenavAccordionPages">
       <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="st_index.php">Student List</a>
        <a class="nav-link" href="kg_st_info_index.php">KG Student List</a>

        <a class="nav-link" href="register.html">Register</a>
        <a class="nav-link" href="password.html">Forgot Password</a>
       </nav>
      </div>
      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError"
       aria-expanded="false" aria-controls="pagesCollapseError">
       Exam & Result
       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
       data-bs-parent="#sidenavAccordionPages">
       <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="exam_name_index.php">Exam Name</a>
        <a class="nav-link" href="exam_result_index.php">Exam Result</a>
        <a class="nav-link" href="404.html">404 Page</a>
        <a class="nav-link" href="500.html">500 Page</a>
       </nav>
      </div>
     </nav>
    </div>

    <!-- end -->

    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_Pages"
     aria-expanded="false" aria-controls="collapsePages">
     <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
     Post Management
     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapse_Pages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
     <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse_Auth"
       aria-expanded="false" aria-controls="pagesCollapseAuth">
       Post
       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="pagesCollapse_Auth" aria-labelledby="headingOne"
       data-bs-parent="#sidenavAccordionPages">
       <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="category_index.php">Category List</a>
        <a class="nav-link" href="post_index.php">Post List</a>

        <a class="nav-link" href="register.html">Register</a>
        <a class="nav-link" href="password.html">Forgot Password</a>
       </nav>
      </div>
      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError"
       aria-expanded="false" aria-controls="pagesCollapseError">
       Error
       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
       data-bs-parent="#sidenavAccordionPages">
       <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="401.html">401 Page</a>
        <a class="nav-link" href="404.html">404 Page</a>
        <a class="nav-link" href="500.html">500 Page</a>
       </nav>
      </div>
     </nav>
    </div>

    <div class="sb-sidenav-menu-heading">Addons</div>
    <a class="nav-link" href="charts.html">
     <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
     Charts
    </a>
    <a class="nav-link" href="tables.html">
     <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
     Tables
    </a>
   </div>
  </div>
  <div class="sb-sidenav-footer">
   <div class="small">Logged in as:</div>
   Start Bootstrap
  </div>
 </nav>
</div>