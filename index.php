<?php
include_once (dirname(__FILE__)).'/settings/core.php';
include_once (dirname(__FILE__)).'/controllers/product_controller.php';
include_once (dirname(__FILE__)).'/controllers/cart_controller.php';
$books_arr = display_books_fxn();
if(isset($_SESSION['user_id'])){
      $cart_total_arr = get_cart_items_no_fxn($_SESSION['user_id']);
  }else{
      $ip_add = getRealIpAddr();
      $cart_total_arr = get_cart_items_no_nlog_fxn($ip_add);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Books-R-Us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript --> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

 <!--  <script type="text/javascript" src="js\jquery-ui-1.12.1\jquery-ui-1.12.1\jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="css/custom.css">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    .nav-link{
      color: black;
    font-weight: 600;
    }

  </style>
</head>

<body>

   <?php
  session_start();
//echo $_SESSION['user_role'];
  if((isset($_SESSION['user_role'])) && ($_SESSION['user_role'] == 2)){
    ?>


     <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" style="color:blue;">
      <div class="container">

        <!-- Brand -->
          <img src="images/logo1.png" style="width:100px;height:55px;">

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
              <a class="nav-link waves-effect" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="login/logout_process.php">Logout</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link waves-effect" href="aboutus.html" target="_blank">About Us</a>
            </li> -->
            <li class="nav-item-s">
               <form class="form-inline" method="get" action="functions/product_search.php">
                <input class="form-control" type="search" name="search_term">
                <button type="submit" name="submit" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg></button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/cart.php">
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
          <img src="images/logo1.png" style="width:100px;height:55px;">

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
              <a class="nav-link waves-effect" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/profile.php">Profile</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/author.php">Authors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/genre.php">Genre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/product.php"> Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="login/logout_process.php">Logout</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link waves-effect" href="aboutus.html" target="_blank">About Us</a>
            </li> -->
            <li class="nav-item-s">
              
               <form class="form-inline" method="get" action="functions/product_search.php">
                <input class="form-control" type="search" name="search_term">
                <button type="submit" name="submit" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg></button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/cart.php">
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
          <img src="images/logo1.png" style="width:100px;height:55px;">

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
              <a class="nav-link waves-effect" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/login.php">Login
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link waves-effect" href="aboutus.php">About Us</a>
            </li> -->
            <li class="nav-item-s">
              <form class="form-inline" method="get" action="functions/product_search.php">
                <input class="form-control" type="search" name="search_term" value="">
                <button type="submit" class="btn btn-primary" style="height: 15%;" name="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg></button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="view/cart.php">
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


     
  

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('images/enola.jpg'); background-repeat: no-repeat; background-size: cover;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content: get background imagery later-->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <a><strong style="font-family: 'Berkshire Swash';color: white;" href="#">New this week: Enola Holmes – The River Bank</strong></a>
              </h1>
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('images/papa.jpg'); background-repeat: no-repeat; background-size: cover;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
            <!-- Content: get background imagery later-->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <a><strong style="font-family: 'Berkshire Swash';color: white;" href="#">Femi Otedola's Summer Reading List</strong></a>
              </h1>
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('images/YaaAsantewaa.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong><a style="color: white;font-family: 'Berkshire Swash';" href="#">Tale as Old as Time: The Story of Yaa Asantewaa</a></strong>
              </h1>
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">

      <hr style="border: 3px solid darkblue; width: 95% ">

      <hr style="border: 2px solid darkblue; width: 75% ">
      <br><br>
      <h3 style="font-family: 'Berkshire Swash';"><u>Check out our top picks for this week!</u></h3>
      <br>
      <br>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">
            <?php
                for($i=0; $i<4; $i++){
            ?>
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5><?= $books_arr[$i]['genre_name'] ?></h5>
                </a>
                <h5>
                  <strong>
                    <a href="<?= "view/product-page.php?isbn=".$books_arr[$i]['isbn']."&gen=".$books_arr[$i]['genre_id'] ?>" class="dark-grey-text"><i><?= $books_arr[$i]['book_title'] ?></i>
                    <br>
                    <img src="<?= $books_arr[$i]['book_image'] ?>" width="200px">
                    <br></a>
                    <span class="badge badge-pill danger-color">Bestseller</span>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>¢ <?= $books_arr[$i]['book_price'] ?></strong>
                </h4>
              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
          <!--Grid column-->
           <?php } ?>
          
        </div>
        <!--Grid row-->

      </section>
        <!--Section: Products v.3-->
        <section class="text-center mb-4">

        <br>
        <h3 style="font-family: 'Berkshire Swash';"><u>Shop by category</u></h3>
        <div class="row wow fadeIn">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="view/shop.php?type=gen&id=3" class="grey-text">
                  <h5>Love</h5>
                </a>
                <h5>
                  <strong>
                    
                    <img src="images/love.jpg" width="200px">
                    <br>
                  </strong>
                </h5>

                
              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
            
        <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="view/shop.php?type=gen&id=1" class="grey-text">
                  <h5>Drama</h5>
                </a>
                <h5>
                  <strong>
                    
                    <img src="images/drama.jpg" width="200px">
                    <br>
                  </strong>
                </h5>

                
              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
            
        <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="view/shop.php?type=gen&id=4" class="grey-text">
                  <h5>Fiction</h5>
                </a>
                <h5>
                  <strong>
                    
                    <img src="images/fiction.png" width="200px">
                    <br>
                  </strong>
                </h5>

                
              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
            
        <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="view/shop.php?type=gen&id=6" class="grey-text">
                  <h5>Horror</h5>
                </a>
                <h5>
                  <strong>
                    
                    <img src="images/horror.jpg" width="200px">
                    <br>
                  </strong>
                </h5>

                
              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
          <!--Grid column-->
           
          
        </div>    
        
        </section>
      </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/Pages-Developers-112982973948195/?view_public_for=112982973948195" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3"><p align="text-center" style="font-size: 10px">© 2020 Copyright: Pages Developers</p></div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
