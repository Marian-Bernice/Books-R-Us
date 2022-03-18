<?php
require("../settings/core.php");
check_permission();
require("../controllers/product_controller.php");
$author_arr = display_authors_fxn();
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

	<title>Books-R-Us: Author</title>
</head>
<body>
  <style type="text/css">
  .nav-link{
      color: black;
      font-weight: 600;
    }

</style>
	<?php 
		include("../view/navbar.php");
	?>
    
    <div class="container">
      <br>
      <h1 style="font-family:cursive;">Authors</h1>
    <h6 style="font-family:cursive;">Add New Author</h6>

    <form method="post" action="../functions/author_add.php">
      <div class="form-row">
        <div class="form-group col-md-6" style="font-family:cursive;">
          <input type="text" class="form-control my-1" id="authorname" name="name" placeholder="Author Name">
        </div>
        <div class="form-group col-md-6">
          <button type="submit" class="btn btn-primary" name="submit" style="font-family:cursive;">Submit</button>
        </div>
      </div>
</form>
    <ul class="list-group">
    <?php
     foreach($author_arr as $data){
    ?>
        <li class="list-group-item" style="font-weight:20px; font-family:cursive;"><?php echo $data['author_name']; ?>
        <a href="<?php echo '../functions/author_delete.php?id='.$data['author_id']; ?>" class="btn btn-danger float-right mx-sm-3">Delete</a>
        <a href="<?php echo 'author_update.php?id='.$data['author_id'] ?>" class="btn btn-primary float-right">Update</a>

        </li>
    <?php } ?>
</ul>

    </div>
    <br>
    <br>

	<!-- Table displaying all cart entries -->

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