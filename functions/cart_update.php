<?php
require("../controllers/cart_controller.php");
require_once("../settings/core.php");

//check if form submit is clicked
if(isset($_GET['submit'])){
    //grab inputs
    $qty = $_GET['qty'];
    $isbn = $_GET['isbn'];
    $stock = get_stock_fxn($isbn);
    if(($stock['stock'] - $qty)>= 0){
        unset($_SESSION['stock_msg']);
        $r_qty = $stock['stock'] - $qty;
        //$update_stock = update_stock_fxn($isbn, $r_qty);
          //check for logged in
        if(isset($_SESSION['user_id'])){
            $user_id = $_SESSION['user_id'];
            $update = update_cart_item_qty_fxn($isbn,$user_id,$qty);
            if($update){
                add_to_notifs("Cart has been updated");
                //header("location: ../view/cart.php");
            }else{
                add_to_notifs("Update failed");
                //echo "failed";
            }
        }else{
            $ip_add = getRealIpAddr();
            $update = update_cart_item_qty_nlog_fxn($isbn, $ip_add, $qty);
            if($update){
                add_to_notifs("Cart has been updated");
                //header("location: ../view/cart.php");
            }else{
                add_to_notifs("Update failed");
            }
        }  
    }else{
        //$_SESSION['stock_msg'] = "We don't have that amount in stock consider reducing the amount. We have ".$stock['stock']." books available";
        add_to_notifs("We don't have that amount in stock consider reducing the amount. We have ".$stock['stock']." books available");
        header("location: ../view/cart.php");
    }
    
}
?>
