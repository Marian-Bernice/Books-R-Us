<!DOCTYPE html>
<html>
<head>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="../css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="../css/style.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
	 <!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
	<!-- Initializations -->
	<script type="text/javascript">
	// Animations initialization
	new WOW().init();

  </script>
	<link rel="stylesheet" href="../css/custom.css">
	<style>
		footer {
		  position: fixed;
		  left: 0;
		  bottom: 0;
		  width: 100%;
		}
		/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
		.flip-card {
		background-color: transparent;
		width: 300px;
		height: 200px;
		border: 1px solid #f1f1f1;
		perspective: 1000px;
		}

		.flip-card-inner {
		position: relative;
		width: 100%;
		height: 100%;
		text-align: center;
		transition: transform 0.8s;
		transform-style: preserve-3d;
		}

		/* Do an horizontal flip when you move the mouse over the flip box container */
		.flip-card:hover .flip-card-inner {
		transform: rotateY(180deg);
		}

		/* Position the front and back side */
		.flip-card-front, .flip-card-back {
		position: absolute;
		width: 100%;
		height: 100%;
		-webkit-backface-visibility: hidden; /* Safari */
		backface-visibility: hidden;
		}

		/* Style the front side (fallback if image is missing) */
		.flip-card-front {
		background-color: #bbb;
		color: black;
		}

		/* Style the back side */
		.flip-card-back {
		background-color: dodgerblue;
		color: white;
		transform: rotateY(180deg);
		}
</style>

	<title>Books-R-Us: About Us</title>
</head>
<body>
	<?php
		include("navbar.php");
	?>
	<br><br><br><br>
	<h3 style="font-family: 'Berkshire Swash'; margin-left: 5%"><u>About Us</u></h3>
	<div class="flip-card">
	  <div class="flip-card-inner">
	    <div class="flip-card-front">
	      <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
	    </div>
	    <div class="flip-card-back">
	      <h1>John Doe</h1>
	      <p>Architect & Engineer</p>
	      <p>We love that guy</p>
	    </div>
	  </div>
	</div>



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
    <div class="footer-copyright py-3"><p align="Right" style="font-size: 10px">© 2020 Copyright: Pages Developers</p></div>
    <!--/.Copyright-->
  </footer>
  <!--/.Footer-->
</body>
</html>
