<?php
require("../controllers/product_controller.php");
$delete = delete_genre_fxn($_GET['id']);
if($delete){
    header("location: ../view/genre.php");
}else{
    echo "something went wrong";
}
?>
