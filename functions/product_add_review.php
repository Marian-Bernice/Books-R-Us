<?php
require_once("../controllers/product_controller.php");
$errors = array();
if(isset($_POST['submit'])){
    $subject = $_POST['review_subject'];
    $review = $_POST['book_review'];
    $isbn = $_POST['isbn'];
    $user_id = $_POST['user_id'];
    $date = date("Y/m/d");
    
    if(strlen($subject) > 100){
        array_push($errors, "Title is too long");
    }
    if(strlen($subject) > 300){
        array_push($errors, "Review is too long");
    }
    if(count($errors) == 0){
        $insert_review = insert_book_review_fxn($user_id, $isbn, $review, $subject, $date);
        if($insert_review){
            header("location: ../view/product-page.php?isbn=".$isbn);
        }else{
            echo "false";
        }
    }else{
        print_r($errors);
    }
}


?>