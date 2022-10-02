<?php

require_once('../../function/notification.php');

?>



<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link h1 active"  aria-current="page" href="home.php">
              <span data-feather="home"></span>
              HOME
            </a>
          </li>
              <?php

              if($num > 0){
                echo '
                <li class="nav-item">
                  <a class="nav-link btn btn-info" href="notification.php">
                  Notification
                  <div class="btn-group me-2">
                  <button type="button" class="btn btn-sm btn-outline-danger" id="appen">'.$num.'</button>
                </div>
                  </a>
                </li>';
              }else{

                echo '
                <li class="nav-item">
                  <a class="nav-link btn btn-info " href="">
                  Notification
                  <div class="btn-group me-2">
                  <button type="button" class="btn btn-sm btn-outline-danger" id="appen">'.$num.'</button>
                </div>
                  </a>
                </li>';

              }

              ?>
          <li class="nav-item">
            <a class="nav-link btn btn-info" href="profile.php">
              <span data-feather="shopping-cart"></span>
              profile
            </a>
          </li>
            </ul>
      </div>
    </nav>

    