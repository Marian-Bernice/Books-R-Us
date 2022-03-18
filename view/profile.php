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
    height: 450px;
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
	<title>Books-R-Us: User Profile</title>
</head>
<body>
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px; font-family: cursive;">Profile</h1>
        
      </div>
    </div>
	<?php 
		include("navbar.php");
        include_once("../controllers/customer_controller.php");
        include_once("../controllers/product_controller.php");
        $book_reviews = show_user_book_reviews_fxn($_SESSION['user_id']);
        if(isset($_SESSION['user_id'])){
            //code..
            $customer_arr = display_customer_fxn($_SESSION['user_id']);
            //print_r($customer_arr);
        }else{
            header("location: ../index.php");
        }
	?>
    

	<!-- Table displaying all cart entries -->
    <div class="container" style="padding-top: 10px">
     
        
    <form class="text-center border border-light p-5" method = "POST" action="../functions/customer_update.php" style="width:80%; margin:auto; background-color: #F0E68C;">
              <p class="h4 mb-4" style="font-family: cursive; font-size: 30px;"><i>Update Profile</i></p>
              <!-- <div class="form-row mb-4"> -->
                <label style="font-family: cursive;">Full Name</label>
                <!-- Full name -->
                <input type="text" id="defaultRegisterFormName" class="form-control" placeholder="Full name" name="name" value="<?= $customer_arr['user_name'] ?>" required style="font-family: cursive;">
                <br>        

                <!-- Phone number -->
                <label style="font-family: cursive;">Phone Number</label>
                <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="contact" value="<?= $customer_arr['user_contact'] ?>" required style="font-family: cursive;">
                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                </small>

                <!-- Country -->
                <label style="font-family: cursive;">Country</label>
                <input type="text" id="defaultRegisterFormCountry" name="country" class="form-control" placeholder="Country" value="<?= $customer_arr['user_country'] ?>" required style="font-family: cursive;">
                <br>

                <!-- City -->
                <label style="font-family: cursive;">City</label>
                <input type="text" id="defaultRegisterFormCity" name="city" class="form-control" placeholder="City" value="<?= $customer_arr['user_city'] ?>" required style="font-family: cursive;">
                <br>
                <!-- Street -->
                <label style="font-family: cursive;">Street</label>
                <input type="text" class="form-control" placeholder="Street" aria-describedby="defaultRegisterFormPasswordHelpBlock"  name="street" value="<?= $customer_arr['user_street'] ?>" required style="font-family: cursive;">
                
                <br>
                <label style="font-family: cursive;">Zip Code</label>
                <!-- Zip Code -->
                <input type="number" id="defaultRegisterFormZip" name="zip_code" class="form-control" placeholder="Zip Code" value="<?= $customer_arr['zip_code'] ?>" required style="font-family: cursive;">
                <br>
                <input name="user_id" type="hidden" value="<?= $customer_arr['user_id'] ?>" style="font-family: cursive;">
                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit" name="submit" style="font-family: cursive;">Update Profile</button>

            </form>
        
    <form class="text-center border border-light p-5" method = "POST" action="../functions/complaint_add.php" style="width:80%; margin:auto; background-color: #F0E68C;">
        <p class="h4 mb-4" style="font-family: cursive;"><i>Lodge Complaint</i></p>
                <label style="font-family: cursive;">Complaint Title</label>
                <!-- Full name -->
                <input type="text" id="defaultRegisterFormName" class="form-control" placeholder="Complaint Title" name="complaint_title" required style="font-family: cursive;">
                <br>
        
                <label style="font-family: cursive;">Complaint</label>
                <textarea name="complaint" class="form-control" rows="3" style="font-family: cursive;">  </textarea>
                <input type="hidden" name="user_id" value="<?= $customer_arr['user_id'] ?>" style="font-family: cursive;">
                <button class="btn btn-info my-4 btn-block" name="submit" style="font-family: cursive;">Submit</button>
        
    </form>
        
    <div class="container" style="margin-top: 95px; width:80%">
        <h1>Your Book Reviews</h1>
    
        <?php
            //print_r($book_reviews);
            foreach($book_reviews as $key => $value){
                ?>
        <div class="media">
            <div class="media-body">
            <h3 class="mt-0"><?= $value['book_title'] ?></h3>
            <h5 class="mt-0"><?= $value['title'] ?></h5>
            <?= $value['review'] ?>
          </div>
        </div>
        <a href="<?= "../functions/review_delete.php?review_id=".$value['review_id'] ?>" class="btn btn-danger">Delete</a>
        <hr>
        <?php
            }
        ?>
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