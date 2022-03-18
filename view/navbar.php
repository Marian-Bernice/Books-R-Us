<?php
  include_once("../settings/core.php");
  include_once("../controllers/cart_controller.php");
  if(isset($_SESSION['user_id'])){
      $cart_total_arr = get_cart_items_no_fxn($_SESSION['user_id']);
  }else{
      $ip_add = getRealIpAddr();
      $cart_total_arr = get_cart_items_no_nlog_fxn($ip_add);
  }

  if((isset($_SESSION['user_role'])) && ($_SESSION['user_role'] == 2)){
    ?>


     <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" style="color:blue;">
      <div class="container">

        <!-- Brand -->
          <img src="../images/logo1.png" style="width:100px;height:55px;">

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left -->
          <ul class="navbar-nav mr-auto"></ul>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="../login/logout_process.php">Logout</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link waves-effect" href="aboutus.html" target="_blank">About Us</a>
            </li> -->
            <li class="nav-item-s">
               <form class="form-inline" method="get" action="../functions/product_search.php">
                <input class="form-control" type="search" name="search_term">
                <button type="submit" name="submit"class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg></button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="cart.php">
                <i class="fas fa-shopping-cart"></i>
                <span class="clearfix d-none d-sm-inline-block"> Cart(<?= $cart_total_arr['count'] ?>) </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

<?php
  }elseif((isset($_SESSION['user_role'])) &&($_SESSION['user_role'] == 1)){
     ?>
<!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" style="color:blue;">
      <div class="container">

        <!-- Brand -->
          <img src="../images/logo1.png" style="width:100px;height:55px;">

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left -->
          <ul class="navbar-nav mr-auto"></ul>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="profile.php">Profile</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link waves-effect" href="author.php">Authors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="genre.php">Genre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="product.php"> Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="../login/logout_process.php">Logout</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link waves-effect" href="aboutus.html" target="_blank">About Us</a>
            </li> -->
            <li class="nav-item-s">
              
               <form class="form-inline" method="get" action="../functions/product_search.php">
                <input class="form-control" type="search" name="search_term">
                <button type="submit" name="submit" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg></button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="cart.php">
                <i class="fas fa-shopping-cart"></i>
                <span class="clearfix d-none d-sm-inline-block"> Cart (<?= $cart_total_arr['count'] ?>)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <?php
  }else{
    ?>
     <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Brand -->
          <img src="../images/logo1.png" style="width:100px;height:55px;">

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left -->
          <ul class="navbar-nav mr-auto"></ul>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="login.php">Login
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link waves-effect" href="aboutus.php">About Us</a>
            </li> -->
            <li class="nav-item-s">
              <form class="form-inline" method="get" action="../functions/product_search.php">
                <input class="form-control" type="search" name="search_term" value="">
                <button type="submit" class="btn btn-primary" style="height: 15%;" name="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg></button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="cart.php">
                <i class="fas fa-shopping-cart"></i>
                <span class="clearfix d-none d-sm-inline-block"> Cart (<?= $cart_total_arr['count'] ?>)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

<?php
  }
?>

<div style="padding-bottom: 80px"></div>
