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
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/library.jpg");
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

	<title>Books-R-Us: Payment</title>
</head>
<body>
	<?php 
		include("navbar.php");
        if(!isset($_SESSION['user_id'])){
            header("location: login.php");
        }
        include_once("../controllers/cart_controller.php");
        if(isset($_SESSION['user_id'])){
            $cart_arr = view_cart_fxn($_SESSION['user_id']);
            //print_r($cart_arr);
            $checkOutAmt = get_cart_value_fxn($_SESSION['user_id']);
        }
        
        
	?>
    
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px; font-family: cursive;">Check Out</h1>
        
      </div>
    </div>
    
    <div class="container" style="padding-top: 50px">
      <div class="row">
        <div class="col-sm-9">
          <table class="table">
              <thead class="thead-light">
                <tr style="font-family: cursive;">
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>

                </tr>
              </thead>
              <tbody>
                <?php
                  foreach($cart_arr as $key => $cartItem){
                  ?>

                  <tr style="font-family: cursive;">
                  <th scope="row"><?= $cartItem['book_title'] ?></th>
                  <td>Ghc <?= $cartItem['book_price'] ?></td>
                    <td>
                        <?= $cartItem['qty'] ?>

                    </td>
                </tr>

                  <?php } ?>

              </tbody>
            </table>
        </div>
        <div class="col-sm-3 bg-light" style="padding: 40px 10px " >
          <h5 style="padding-bottom: 10px; font-family: cursive;">Cart Summary</h5>
          <table class="table">
  <thead>

  </thead>
  <tbody style="font-family: cursive;">
    <tr>

      <td>Sub-Total</td>
      <td>Ghc <?= $checkOutAmt['Result'] ?></td>

    </tr>

    <tr>

      <td>Total</td>
      <td>Ghc <span id="amt"><?= $checkOutAmt['Result'] ?></span></td>


    </tr>
  </tbody>

</table>
    <center>
    <p style="font-family: cursive;">Pay with Paypal</p>
    </center>
    <div id="paypal-payment-button">
    </div>
    
    <center>
    <p style="font-family: cursive;">OR</p>
    </center>

    <center>
    <p style="font-family: cursive;">Pay with Paystack</p>
    </center>
    <!--
    <div>
      <a href="<?= 'initialize.php?amt='.$checkOutAmt['Result']; ?>" class="btn btn-success btn-lg btn-block" role="button" style="border-radius: 100px;">Paystack</a>
    </div>
    --> <input type="hidden" id="email" value="<?= $_SESSION['user_email'] ?>">
        <button class="btn btn-success btn-lg btn-block" onclick="payWithPaystack()" style="border-radius: 100px;">Pay with Paystack</button>


        </div>

      </div>
    </div>
    
    

	<!-- Table displaying all cart entries -->
    <div class="container" style="padding-top: 100px"></div>
	<!--Footer-->
  
  <!--/.Footer-->
    <?php
    if(isset($_GET['status'])){
        if($_GET['status'] == 'failed'){
            ?>
      <script>alert("Payment Cancelled Or Failed")</script>
      <?php
        }
    }
    ?>
    <script src="https://www.paypal.com/sdk/js?client-id=AVfGv6Z5RwC0EOTNplKlG2XLXRhWWREacIPQKRdVDevDzmi6snUeA5MC4IYEUOo-ePbTIDMYhPT2iG-E&disable-funding=credit,card"></script>
    <script src="../js/payment.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script>
        function payWithPaystack() {
          let handler = PaystackPop.setup({
            key: 'pk_test_87cf10201eaee5bb25a86a2264a139d191c890fb', // Replace with your public key
            email: $('#email').val(),
            currency: "GHS",
            amount: $('#amt').html() * 100,
            // label: "Optional string that replaces customer email"
            onClose: function(){
              alert('Window closed.');
            },
            callback: function(response){
              let message = 'Payment complete! Reference: ' + response.reference;
              window.location.href = "../functions/process_payment.php?status=completed";
              console.log(response.reference);
              alert(message);
            }
          });
          handler.openIframe();
        }
    </script>
</body>
</html>