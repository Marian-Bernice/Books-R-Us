<!-- <?php 
// include_once("../settings/core.php"); 
//session_start();
?> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Books-R-Us: Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.min.css" rel="stylesheet">
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
  	<link rel="stylesheet" href="../css/custom.css">
  </head>
  <body>
    <style media="screen">

      body {
        min-height: 100vh;
        background: #fafafa;
      }

      .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
      }

      .social-link:hover, .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #555;
      }

      .progress {
        height: 10px;
      }
        
        .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/library.jpg");
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    padding-bottom: 150px;
  }

  /* Place text in the middle of the image */
  .hero-text {
    font-family: Berkshire Swash;
    text-align: center;
    position: absolute;
    top: 50%;
    padding-left:30%;
    /* transform: translate(-50%, -50%); */
    color: white;
  }


  .nav-link{
    color: black;
    font-weight: 600;
  }
    </style>
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px">Shop</h1>
        <p style="font-size:25px"><i>"If you don't like to read you have not found the right book."</i></p>
      </div>
    </div>
    <?php
      include("navbar.php");
      include_once("../controllers/product_controller.php");
      if((isset($_GET['type'])) && (isset($_GET['id']))){
          $book_type = $_GET['type'];
          $id = $_GET['id'];
          if($book_type = "gen"){
              $books_arr = shop_by_genre_fxn($id);
          }elseif($book_type = "auth"){
              $books_arr = shop_by_author_fxn($id);
          }
          
      }else{
        $books_arr = display_books_fxn();
      }
    ?>

    
      <div class="container">
          
            <div class="row pb-5 mb-4" >
               <?php
                    foreach($books_arr as $key => $value){
                        ?>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" style="padding-top: 20px">
                   <!-- Card-->
                   <div class="card rounded shadow-sm border-0">
                       <div class="card-body p-4"><img src="<?= "../".$value['book_image'] ?>" alt="" class="img-fluid d-block mx-auto mb-3">
                           <p class="small text-muted font-italic" style="font-family: 'Berkshire Swash'; text-align:center; font-size:20px;"><?= $value['book_title'] ?></p>
                           <p class="small text-muted font-italic" style="font-family: 'Berkshire Swash'; text-align:center; font-size:20px;">¢ <?= $value['book_price'] ?></p>
                           <ul class="list-inline small" style="margin:auto; padding-left:15%;">
                             <a href="<?= "product-page.php?isbn=".$value['isbn'] ?>" class="btn btn-primary">View</a>
                             <a href="<?= "../functions/cart_add.php?isbn=".$value['isbn']."&qty=1" ?>" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>

                           </ul>
                       </div>
                   </div>
               </div>
                
                <?php
                    }
                ?>
          </div>
      </div>
      <?php 
    
    include_once("../settings/core.php");
    if(isset($_SESSION['notifs'])){
        display_error_message($_SESSION['notifs']);
    }
    ?>
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
      
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<?php 
    
    include_once("../settings/core.php");
    if(isset($_SESSION['notifs'])){
        display_error_message($_SESSION['notifs']);
    }
    ?>
  </body>
</html>
