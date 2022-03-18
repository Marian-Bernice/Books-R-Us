<!DOCTYPE html>
<html>
<head>
	<title>Books-R-Us: Search</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Hello, world!</title>
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

	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<style type="text/css">
  .nav-link{
      color: black;
      font-weight: 600;
    }
</style>
	
	<?php 
		include("navbar.php");
        if(isset($_SESSION['search_results'])){
            $search_results = $_SESSION['search_results'];
            //print_r($search_results);
        }
	?>
<div style="padding-bottom: 50px"></div>
<div class="container">
    <?php
        if(!empty($search_results)){
        foreach($search_results as $key => $value){
            //print_r($value);
            ?>
        <div class="media">
          <img src="<?= '../'.$value['book_image'] ?>" class="mr-3" alt="..." width="150px">
          <div class="media-body" style="padding-top: 10px">
            <a href="<?= 'product-page.php?isbn='.$value['isbn'] ?>"><h5 class="mt-0"><?= $value['book_title'] ?></h5></a>
            <h8 class="mt-0">¢<?= $value['book_price'] ?></h8>
            <p class="mt-0">By <?= $value['author_name'] ?></p>
            <p class="mt-0"><?= $value['genre_name'] ?></p>
            
          </div>
        </div>
        <hr>
    <?php
            }
        }else{
            echo "Nothing found please search for something else";
        }
    ?>
    
</div>


<!-- SCRIPTS -->
    
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- JQuery -->
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="../js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="../js/mdb.min.js"></script>
	<!-- Initializations -->
	<script type="text/javascript">
	// Animations initialization
	new WOW().init();

	</script>
    <script type="text/javascript" src="../js/add_to_cart.js"></script>
    
</body>
</html>