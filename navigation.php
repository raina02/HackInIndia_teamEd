<?php
    include "header.php";
?>

<style>
  .navbar a{
    font-size:20px;
  }
  .search-bar input{
    width:300px;
  }
  </style>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand pl-3" href="#">Navbar Icon</a>
          <form class="d-flex search-bar pl-5">
              <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 mr-3">
              
              <li class="nav-item">
                <a class="nav-link " href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "  href="#">Signup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Downloads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     
      <?php
      
        include "footer.php";
      
      ?>