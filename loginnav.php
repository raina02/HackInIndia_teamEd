<?php

 session_start();

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
          <a class="navbar-brand pl-3" href="index.php">Team C_C</a>
          <form class="d-flex search-bar pl-5">
              <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pr-2" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 mr-5">
              
              <li class="nav-item">
                <a class="nav-link courses" href="courses.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Downloads</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle da" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  <?php if(isset($_SESSION["name"])){echo $_SESSION["name"];} ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                  <li><a class="dropdown-item px-0 pl-2" style="font-size:16px;" href="profile.php"><i class="fa fa-edit mr-1"></i>Edit Profile</a></li>
                  <li><a class="dropdown-item px-0 pl-2" style="font-size:16px;" href="changepassword.php"><i class="fa fa-key mr-1"></i>Change Password</a></li>
                  <li><a class="dropdown-item  px-0 pl-2" style="font-size:16px;" href="logout.php"><i class="fa fa-sign-out mr-1"></i>Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     
      