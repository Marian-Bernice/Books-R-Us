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

	<title>Books-R-Us: Payment Success</title>
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
    padding-left:40%;
    /* transform: translate(-50%, -50%); */
    color: white;
  }

  .nav-link{
      color: black;
      font-weight: 600;
    }

    
    </style>
</head>
<body>
	<?php 
		include("navbar.php");
        include_once("../controllers/cart_controller.php");
        $user_id = $_SESSION['user_id'];
        $order_id = $_GET['ord_id'];
        $order = get_order_fxn($order_id);
        $order_details = get_order_details_fxn($order_id);
    
	?>
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px; font-family:cursive;">Thank You!</h1>
        
      </div>
    </div>
    

	<!-- Table displaying all cart entries -->
    <div class="container" style="padding-top: 50px">
    <h1 style="font-family:cursive;">Your Order is being processed!</h1>
    <h8 style="font-family:cursive;">Please find below your Invoice Summary</h8>
    <div class="row">
        <div class="col-sm-9">
          <table class="table">
              <thead class="thead-light">
                <tr style="font-family:cursive; color: blue;">
                  <th scope="col" style="color: blue;">#</th>
                  <th scope="col" style="color: blue;">Product</th>
                  <th scope="col" style="color: blue;">Price</th>
                  <th scope="col" style="color: blue;">Quantity</th>
                  <th scope="col" style="color: blue;">Sub Total</th>

                </tr>
              </thead>
              <tbody>
                <?php
                  $counter = 1;
                  $total = 0;
                  foreach($order_details as $key => $value){
                  ?>

                  <tr style="font-family: cursive">
                  <th scope="row" style="font-family:cursive;"><?= $counter; ?></th>
                  <td><?= $value['book_title'] ?></td>
                  <td>Ghc <?= $value['book_price'] ?></td>
                  <td><?= $value['qty'] ?></td>
                  <td><?= $value['result'] ?></td>
                </tr>

                  <?php
                  $total += $value['result'];
                  } ?>

              </tbody>
            </table>
        </div>
        <div class="col-sm-3 bg-light" style="padding: 40px 10px ">
          <h5 style="padding-bottom: 10px; font-family:cursive;">Invoice Summary</h5>
          <table class="table">
  <thead>

  </thead>
  <tbody>
    <tr style="font-family:cursive;">

      <td>Invoice No:</td>
      <td> <?= $order['invoice_no'] ?></td>

    </tr>

    <tr>

      <td style="font-family: cursive">Invoice Total</td>
      <td style="font-family: cursive">Ghc <span id="amt"><?= $total ?></span></td>


    </tr>
  </tbody>

</table>
    <div id="paypal-payment-button">
    </div>


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
</body>
</html>