<?php
require_once("../controllers/cart_controller.php");
session_start();
//check for status
if(isset($_GET['status'])){
    $status = $_GET['status'];
    
    if($status == 'completed'){
        //if payment confirmed
        //record the order
        
        $user_id = $_SESSION['user_id'];
        $inv_no = mt_rand(10,5000);
        $ord_date = date("Y/m/d");
        $ord_stat = 'unfulfilled';
        
        $add_order = add_order_fxn($user_id, $inv_no, $ord_date, $ord_stat);
        echo $add_order;
        
        if($add_order){
            
            //record the details of the order
            $recent = recent_order_fxn();
            $cart = view_cart_fxn($user_id);
            print_r($cart);
            foreach($cart as $key => $value){
                echo $value['isbn'];
                echo $value['qty'];
                echo $value['book_price'];
                $add_details = add_order_details_fxn($recent['recent'], $value['isbn'], $value['qty'], $value['book_price']);
                $stock = get_stock_fxn($value['isbn']);
                $r_qty = $stock['stock'] - $value['qty'];
                $update = update_stock_fxn($value['isbn'],$r_qty);
            }
            
            //record the payment
            $amt = get_cart_value_fxn($user_id);
            $currency = "USD";
            $add_payment = add_payment_fxn($amt['Result'], $user_id, $recent['recent'], $currency, $ord_date);
            
            //clear cart
            if($add_payment){
                $clear_cart = clear_cart_fxn($user_id);
                if($clear_cart){
                    header("location: ../view/payment_sucess.php?ord_id=".$recent['recent']);
                }else{
                    echo "cart delete failed";
                }
            }{
                echo "payment failed";
            }
            
        }else{
                echo "adsf";
            }
    }
    
}

?>