<?php
if(isset($_GET['isbn'])){
    include_once (dirname(__FILE__)).'/../controllers/product_controller.php';
    $isbn = $_GET['isbn'];
    $book_arr = display_one_book_fxn($isbn);
    $book_gen_arr = display_book_per_genre_fxn($book_arr['genre_id']);
    //print_r($book_arr);
}
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


	<title>Books-R-Us: Product</title>
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
    
    <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4" style="align: right  ">

          <img src="<?= '../'.$book_arr['book_image'] ?>" class="img-fluid" alt="" width="300px" style="float: right;">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            

            <p class="lead">
              <span style="font-family: cursive;">¢<?= $book_arr['book_price'] ?></span>
            </p>

            <p class="lead font-weight-bold" style="font-family: cursive;">Description</p>

            <p style="font-family: cursive;"><?= $book_arr['book_desc'] ?></p>

            <form method="get" action="../functions/cart_add.php" class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" min="1" aria-label="Search" class="form-control" style="width: 100px" id="qty"name="qty">
              <input type="hidden" id="isbn" name="isbn" value="<?= $book_arr['isbn'] ?>">
              <button class="btn btn-primary btn-md my-0 p" type="submit" id="button">Add to cart
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4" style="font-family: cursive; font-size: 30px;">Related Books</h4>

          

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      

        <!--Grid column-->
        <div class="row pb-5 mb-4" >
               <?php
                    foreach($book_gen_arr as $key => $value){
                        ?>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" style="padding-top: 20px">
                   <!-- Card-->
                   <div class="card rounded shadow-sm border-0">
                       <div class="card-body p-4"><img src="<?= "../".$value['book_image'] ?>" alt="" class="img-fluid d-block mx-auto mb-3">
                           <p class="small text-muted font-italic" style="font-family: 'Berkshire Swash'; text-align:center; font-size:20px;"><?= $value['book_title'] ?></p>
                           <p class="small text-muted font-italic" style="font-family: 'Berkshire Swash'; text-align:center; font-size:20px;">¢ <?= $value['book_price'] ?></p>
                           <ul class="list-inline small" style="margin:auto; padding-left:15%;">
                             <a href="<?= "product-page.php?isbn=".$value['isbn'] ?>" class="btn btn-primary">View</a>
                             <a href="<?= "../functions/cart_add.php?isbn=".$value['isbn']."&qty=1" ?>" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>

                           </ul>
                       </div>
                   </div>
               </div>
                
                <?php
                    }
                ?>
          </div>
        <!--Grid column-->

        <!--Grid column-->
        

      </div>
      <!--Grid row-->

    
  </main>
    
    <div class="container">
        <?php
            $review = array();
            $review = show_book_reviews_fxn($isbn);
            $productCount = count_review_rows_fxn();
    ?>
    <center>
    <h3 style="font-family: cursive; font-size: 30px;">Reviews</h3>  
    </center>  
    <hr> 
    <ul class="list-unstyled">
    <?php
      foreach($review as $key => $value){
          ?>
        <li class="media">
    
    <div class="media-body" style="font-family: cursive;">
      <h3 class="mt-0 mb-1"style="font-style: bold;"><?= $value['title'] ?></h5>
      <h8 class="mt-0 mb-1">By: <?= $value['user_name'] ?></h8> 
      <p><?= $value['review'] ?></p>
     <hr>
    </div>
  </li>
        
        <?php
      }  
    ?>
</ul>
     
    </div>
    <?php
        if(isset($_SESSION['user_id'])){
            
            ?>
        <div class="container">
    <h5 style="font-family: cursive;">Write a Review</h5>
    <form method="post" action="../functions/product_add_review.php">
      <div class="form-group" style="font-family: cursive;">
        <label for="exampleFormControlInput1">Subject</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Subject Here" name="review_subject" required>
      </div>
      <div class="form-group" style="font-family: cursive;">
        <label for="exampleFormControlTextarea1">Review Statement</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="book_review" required></textarea>
      </div>
      <input type="hidden" name="isbn" value="<?= $_GET['isbn'] ?>" style="font-family: cursive;">
      <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>" style="font-family: cursive;">
      <button type="submit" name="submit" class="btn btn-primary" style="font-family: cursive;">Submit Review</button>
</form>
    
    </div>
    
    
    <?php
        }
    ?>
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
<?php 
    
    include_once("../settings/core.php");
    if(isset($_SESSION['notifs'])){
        display_error_message($_SESSION['notifs']);
    }
    ?>

</body>
</html>