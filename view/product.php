<?php
require("../controllers/product_controller.php");
$books_arr = display_books_fxn();

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

	<title>Books-R-Us: Products</title>
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
	?>

	 <div class="container">
    <br>
        <h1 style="font-family: cursive;">Products</h1>
        <h6 style="font-family: cursive;">Add New Product</h6>
        <a href="product_add.php" class="btn btn-primary" style="font-family: cursive;">Add New Product</a>
        <table class="table">
  <thead>
    <tr style="font-family: cursive;">
      <th scope="col">#</th>
      <th scope="col">Book Title</th>
      <th scope="col">Price (Ghc)</th>
      <th scope="col">Current Stock</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $counter = 1;
      foreach($books_arr as $data){
    ?>
    <tr style="font-family: cursive;">
      <th scope="row"><?php echo $counter; $counter++ ?></th>
      <td><?php echo $data['book_title']; ?></td>
      <td><?php echo $data['book_price']; ?></td>
      <td><?php echo $data['stock']; ?></td>
      <td><a href="<?php echo "product_update.php?id=".$data['isbn'] ?>" class="btn btn-primary">Update</a></td>
      <td><a href="<?php echo "../functions/product_delete.php?isbn=".$data['isbn'] ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

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
