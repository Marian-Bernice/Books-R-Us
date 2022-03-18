<?php
require("../controllers/product_controller.php");
if(isset($_GET['search_term'])){
    $search_term = $_GET['search_term'] . "%";
    $books_arr = search_for_book_fxn($search_term);
    
    session_start();
    $_SESSION['search_results'] = $books_arr;
    header("location: ../view/searchbook.php");
    print_r($books_arr);
    
}else{
    header("location: ../view/index.php");
}

?>
