<?php
require("../controllers/product_controller.php");
$delete = delete_author_fxn($_GET['id']);
if($delete){
    header("location: ../view/author.php");
}else{
    echo "something went wrong";
}
?>
