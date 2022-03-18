<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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

	<script type="text/javascript" src="js\jquery-ui-1.12.1\jquery-ui-1.12.1\jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/custom.css">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
    <style>
    .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/cart.jpg");
    height: 350px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    padding-bottom: 150px;
    text-align: center;
  }

  /* Place text in the middle of the image */
  .hero-text {
    font-family: Berkshire Swash;
    text-align: center;
    position: absolute;
    top: 50%;
    padding-left:45%;
    /* transform: translate(-50%, -50%); */
    color: white;
  }
    
  .nav-link{
      color: black;
      font-weight: 600;
    }
    
    </style>
	<title>Books-R-Us: Cart</title>
</head>
<body>
	<?php 
		include("navbar.php");
        include_once("../controllers/cart_controller.php");
        if(isset($_SESSION['user_id'])){
            $cart_arr = view_cart_fxn($_SESSION['user_id']);
            //print_r($cart_arr);
        }else{
            $ip_add = getRealIpAddr();
            $cart_arr = view_cart_nlog_fxn($ip_add);
            //print_r($cart_arr); 
        }
	?>
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px; font-family:cursive;">Cart</h1>
        
      </div>
    </div>

	<!-- Table displaying all cart entries -->
    <div class="container" style="padding-top: 30px">
      <div class="row">
        <div class="container">
            <?php
            if(empty($cart_arr)){
             ?>
            <br>
            <br>
            <p style="font-size: 30px; font-family:cursive;">Cart is empty</p>
            <br>
            <br>
            <a href="../view/shop.php" class="btn btn-primary" style="font-size: 18px; font-family:cursive;">Continue shopping</a>
            <?php
            }else{
                ?>
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col" style="color: blue; font-size: 18px; font-family:cursive;">Product</th>
                  <th scope="col" style="color: blue; font-size: 18px; font-family:cursive;">Price</th>
                  <th scope="col" style="color: blue; font-size: 18px; font-family:cursive;">Quantity</th>

                </tr>
              </thead>
              <tbody>
                <?php
                  
                  foreach($cart_arr as $key => $cartItem){
                  ?>

                  <tr>
                  <th scope="row" style="font-size: 14px; font-family:cursive;"><?= $cartItem['book_title'] ?></th>
                  <td style="font-size: 14px; font-family:cursive;">Ghc <?= $cartItem['book_price'] ?></td>
                    <td style="font-size: 14px; font-family:cursive;">
                        <form class="form-inline" method="GET" action="../functions/cart_update.php">
                            <input name="qty" type="number" min="1" value="<?= $cartItem['qty'] ?>" class="form-control input-sm">
                            <input  type="hidden" name="isbn" value="<?= $cartItem['isbn'] ?>">
                            <button type="submit" name="submit" class="mx-sm-3 btn btn-primary"> Update</button>
                            <a href="<?php echo "../functions/cart_delete.php?isbn=".$cartItem['isbn']; ?>" class="btn btn-danger">Remove</a>
                        </form>

                    </td>
                </tr>

                  <?php } ?>


              </tbody>
            </table>
          <a href="../view/shop.php" class="btn btn-primary" style="font-size: 14px; font-family:cursive;">Continue shopping</a>
                  <a href="payment.php" class="btn btn-primary" style="font-size: 14px; font-family:cursive;">Check-Out</a>
            <?php
            }
            ?>
            
        </div>


      </div>
    
    </div>
    
    
	<!--Footer-->
  <footer style="left: 0;bottom: 0; width: 100%"  class="page-footer text-center font-small mt-4 wow fadeIn">

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
    <div class="footer-copyright py-3"><p align="text-center" style="font-size: 15px">© 2020 Copyright: Pages Developers</p></div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
    
    <?php 
    
    include_once("../settings/core.php");
    if(isset($_SESSION['notifs'])){
        display_error_message($_SESSION['notifs']);
    }
    ?>
</body>
</html>