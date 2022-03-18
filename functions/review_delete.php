<?php
include_once("../controllers/product_controller.php");
include_once("../settings/core.php");
if(isset($_GET['review_id'])){
    $delete = delete_book_review_fxn($_GET['review_id']);
    if($delete){
      add_to_notifs("Review has been deleted");  
    }else{
        
    }
}

?>