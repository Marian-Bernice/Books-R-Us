<?php
require("../settings/core.php");
check_permission();
require("../controllers/product_controller.php");
$author_arr = display_authors_fxn();
$genre_arr = display_genres_fxn();
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

	<title>Books-R-Us: Add Product</title>
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
<br>
	   <div class="container" style="font-family: cursive;">
        <h1>Add New Product</h1>
        <form method="post" action="../functions/product_add.php" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputname">Book Title</label>
              <input type="text" class="form-control" id="inputname" name="book_title">
            </div>
            <div class="form-group col-md-6">
              <label for="inputprice">Price: Ghc</label>
              <input type="number" class="form-control" id="inputprice" name="book_price">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="book_desc"></textarea>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputauthor">Author</label>
              <select name="book_author" id="inputauthor" class="form-control">
                <option value="" selected>Pick an Author</option>
                <?php
                  foreach($author_arr as $data){
                ?>
                  <option value="<?php echo $data['author_id']; ?>"><?php echo $data['author_name']; ?></option>
                  <?php
                  }
                  ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputgenre">Genre</label>
              <select id="inputgenre" class="form-control" name="book_genre">
                <option selected value="">Genre</option>
                <?php
                  foreach($genre_arr as $data){
                ?>
                  <option value="<?php echo $data['genre_id']; ?>"><?php echo $data['genre_name']; ?></option>
                  <?php
                  }
                  ?>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputpublisher">Publisher</label>
              <input type="text" class="form-control" id="inputpublisher" name="book_publisher">
            </div>
            <div class="form-group col-md-6">
              <label for="inputyear">Published Year</label>
              <input type="number" class="form-control" id="inputyear" name="book_pub_year">
            </div>
          </div>
          <div class="form-group">
              <label for="inputstock">Stock</label>
              <input type="number" class="form-control" id="inputstock" name="book_stock">
            </div>
            <div class="form-group">
            <label for="exampleFormControlFile1">Cover Image</label>
            <input type="file" class="form-control-file" name="book_image" id="exampleFormControlFile1">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Add Book</button>
        </form>
      </div>


	<!--Footer-->
  
  <!--/.Footer-->
</body>
</html>
