<nav class="navbar navbar-expand-lg bg-light">
 <div class="container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
     <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Account
     </a>
     <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="register_form.php">Register</a></li>
      <li><a class="dropdown-item" href="login_form.php">Login</a></li>
      <li><a class="dropdown-item" href="../actions/logout.php">Logout</a></li>

      <li>
       <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
     </ul>
    </li>
    <li class="nav-item">
     <a class="nav-link disabled">Disabled</a>
    </li>
   </ul>
   <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
   </form>
  </div>
 </div>
</nav>