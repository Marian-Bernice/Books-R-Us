<?php
include_once (dirname(__FILE__)).'/../classes/cart_class.php';
//require_once("../classes/cart_class.php");

function insert_into_cart_log_fxn($isbn, $ip_add, $user_id, $qty){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->insert_into_cart_log($isbn, $ip_add, $user_id, $qty);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function insert_into_cart_nlog_fxn($isbn, $ip_add, $qty){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->insert_into_cart_nlog($isbn, $ip_add, $qty);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function check_duplicate_log_fxn($isbn, $user_id){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->check_duplicate_log($isbn, $user_id);
    if($run_query){
        $record = $new_cart_object->db_fetch();
        if(!empty($record['isbn']) && !empty($record['user_id'])){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function check_duplicate_nlog_fxn($isbn, $ip_add){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->check_duplicate_nlog($isbn, $ip_add);
    if($run_query){
        $record = $new_cart_object->db_fetch();
        if(!empty($record['isbn']) && !empty($record['ip_add'])){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function view_cart_fxn($user_id){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->view_cart($user_id);
    if($run_query){
        $cart_arr = array();
        while($record = $new_cart_object->db_fetch()){
            $cart_arr[] = $record;
        }
        return $cart_arr;
    }else{
        return false;
    }
}

function view_cart_nlog_fxn($ip_add){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->view_cart_nlog($ip_add);
    if($run_query){
        $cart_arr = array();
        while($record = $new_cart_object->db_fetch()){
            $cart_arr[] = $record;
        }
        return $cart_arr;
    }else{
        return false;
    }
}

function update_cart_item_qty_fxn($isbn, $user_id, $qty){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->update_cart_item_qty($isbn, $user_id, $qty);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function update_cart_item_qty_nlog_fxn($isbn, $ip_add, $qty){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->update_cart_item_nlog_qty($isbn, $ip_add, $qty);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function delete_cart_item_fxn($isbn, $user_id){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->delete_cart_item($isbn, $user_id);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function delete_cart_item_nlog_fxn($isbn, $ip_add){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->delete_cart_item_nlog($isbn, $ip_add);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function get_cart_items_no_fxn($user_id){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->get_cart_items_no($user_id);
    if($run_query){
        $total_arr = $new_cart_object->db_fetch();
        return $total_arr;
    }else{
        return false;
    }
}

function get_cart_items_no_nlog_fxn($ip_add){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->get_cart_items_no_nlog($ip_add);
    if($run_query){
        $total_arr = $new_cart_object->db_fetch();
        return $total_arr;
    }else{
        return false;
    }
}

function get_cart_value_fxn($user_id){
    $new_cart_object = new cart_class();
    $run_query = $new_cart_object->get_cart_value($user_id);
    
    if($run_query){
        $total_arr = $new_cart_object->db_fetch();
        return $total_arr;
    }else{
        return false;
    }
    
}

function update_cart_with_user_id_fxn($user_id, $ip_add){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->update_cart_with_user_id($user_id, $ip_add);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function add_order_fxn($user_id, $invoice_no, $order_date, $order_status){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->add_order($user_id, $invoice_no, $order_date, $order_status);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function add_order_details_fxn($order_id, $isbn, $qty, $book_price){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->add_order_details($order_id, $isbn, $qty, $book_price);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function recent_order_fxn(){
    $new_cart_object = new cart_class();
    
    $run_query = $new_cart_object->recent_order();
    if($run_query){
        $recent_order = $new_cart_object->db_fetch();
        return $recent_order;
    }else{
        return false;
    }
}

function add_payment_fxn($amt, $user_id, $order_id, $currency, $pay_date){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->add_payment($amt, $user_id, $order_id, $currency, $pay_date);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function clear_cart_fxn($user_id){
    $new_cart_object = new cart_class();
    
    $run_query = $new_cart_object->clear_cart($user_id);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function get_order_fxn($order_id){
    $new_cart_object = new cart_class();
    
    $run_query = $new_cart_object->get_order($order_id);
    if($run_query){
        $order_arr = $new_cart_object->db_fetch();
        return $order_arr;
    }else{
        return false;
    }
}

function get_order_details_fxn($order_id){
   $new_cart_object = new cart_class();
    
    $run_query = $new_cart_object->get_order_details($order_id);
    if($run_query){
        
        while($record = $new_cart_object->db_fetch()){
            $order_arr[] = $record;
        }
        return $order_arr;
    }else{
        return false;
    } 
}

function update_stock_fxn($isbn, $r_qty){
    $new_cart_object = new cart_class();
    
    $run_query = $new_cart_object->update_stock($isbn, $r_qty);
    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function get_stock_fxn($isbn){
    $new_cart_object = new cart_class();
    
    $run_query = $new_cart_object->get_stock($isbn);
    if($run_query){
        $stock = $new_cart_object->db_fetch();
        return $stock;
    }else{
        return false;
    }
}
?>
