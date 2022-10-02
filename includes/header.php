<?php
// session_start();
?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a href="home.php" class="nav-link active">
    <h1 style="color:red; font-family: cursive;">SIGMEN</h1>
    </a>

  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="w-100"></div>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../../function/signout.php">Sign out</a>
    </div>
  </div>
</header>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">welecome Back <strong><spa id="name"><?php echo  $_SESSION["fname"]." ".$_SESSION["lname"] ?></spa></strong></h1> 
        <div class="btn-toolbar mb-2 mb-md-0">
          
        </div>
      </div>

