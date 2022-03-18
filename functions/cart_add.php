<?php
require_once("../controllers/cart_controller.php");
require_once("../settings/core.php");


//get book info from link
$isbn = $_GET['isbn'];
$qty = $_GET['qty'];

//get ipaddress of client
$ip_add = getRealIpAddr();

$stock = get_stock_fxn($isbn);
$r_qty = $stock['stock'] - 1;
if($stock['stock'] > 0){
    //$update = update_stock_fxn($isbn, $r_qty);
    //check if customer is logged in
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];

        //check for duplicates
        $is_duplicate = check_duplicate_log_fxn($isbn, $user_id);

        //if item is already in cart
        if($is_duplicate){
            //echo "Product is already in cart. Consider increasing qty in your cart";
            add_to_notifs("Product is already in cart. Consider increasing qty in your cart");
        }else{
            $add_to_cart = insert_into_cart_log_fxn($isbn, $ip_add, $user_id, $qty);

            if($add_to_cart){
                //echo "Product has been added to cart";
                //array_push($notifs, "Product has been added to cart");
                add_to_notifs("Product has been added to cart");
            }else{
                echo "something went wrong";
            }
        }
    }else{
        //if customer hasn't logged in
        $is_duplicate = check_duplicate_nlog_fxn($isbn, $ip_add);
        if($is_duplicate){
        //echo "Product is already in cart. Consider increasing qty in your cart";
        add_to_notifs("Product is already in cart. Consider increasing qty in your cart");
        }else{
            $add_to_cart = insert_into_cart_nlog_fxn($isbn, $ip_add, $qty);

            if($add_to_cart){
                //echo "Product has been added to cart";
                add_to_notifs("Product has been added to cart");
            }else{
                echo "something went wrong";
            }
        }
    }
}else{
    
}



?>
