<?php
require("../controllers/product_controller.php");
$delete = delete_book_fxn($_GET['isbn']);
if($delete){
    header("location: ../view/product.php");
}else{
    echo "something went wrong";
}
?>
