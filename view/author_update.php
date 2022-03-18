<?php
include_once("../settings/core.php");
check_permission();
require("../controllers/product_controller.php");
$author_arr = display_one_author($_GET['id']);
?>



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

	<title>Books-R-Us: Author Update</title>
</head>
<body>
  <style>
  .nav-link{
      color: black;
      font-weight: 600;
    }

    .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/authors.png");
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

</style>
<div class="hero-image">
      
        
      </div>
    </div>
	<?php 
		include("navbar.php");
	?>


	<div class="container">
      <h1 style="font-family:cursive;"> Update Author</h1>


    <form method="post" action="../functions/author_update.php">
      <div class="form-row">
        <div class="form-group col-md-6" style="font-family:cursive;">
          <input type="text" class="form-control my-2" id="authorname" name="name" value="<?php echo $author_arr['author_name']; ?>">
        </div>
        <div class="form-group col-md-6">
          <button type="submit" class="btn btn-primary my-2" name="submit" style="font-family:cursive;">Submit</button>
        </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
</form>


    </div>

	<!--Footer-->
  <footer style="position: fixed;left: 0;bottom: 0; width: 100%"  class="page-footer text-center font-small mt-4 wow fadeIn">

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

