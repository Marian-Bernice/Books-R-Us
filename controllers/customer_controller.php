<?php
//require customer class
include_once (dirname(__FILE__)).'/../classes/customer_class.php';
//require("../classes/customer_class.php");

//function to register customer
function register_customer_fxn($name, $email, $password, $country, $city, $street, $zip_code, $contact){
    //create instance of class
    $customer_object = new customer_class;

    //run the register query
    $run_query = $customer_object->register_customer($name, $email, $password, $country, $city, $street, $zip_code, $contact);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function check_for_existing_customer_fxn($email){
    //create instance of class
    $customer_object = new customer_class;

    //run the query
    $run_query = $customer_object->check_for_existing_customer($email);

    if($run_query){
        $email_arr = $customer_object->db_fetch();
        return $email_arr;
    }else{
        return false;
    }
}

function verify_customer_fxn($email){
    //create instance of class
    $customer_object = new customer_class;

    //run the query
    $run_query = $customer_object->verify_customer($email);

    if($run_query){
        $login_details_arr = $customer_object->db_fetch();
        return $login_details_arr;
    }else{
        return false;
    }
}

function display_customer_fxn($user_id){
    //create instance of class
    $customer_object = new customer_class;

    //run the query
    $run_query = $customer_object->display_customer($user_id);

    if($run_query){
        $customer_arr = $customer_object->db_fetch();
        return $customer_arr;
    }else{
        return false;
    }
}

function update_customer_fxn($name, $number, $country, $city, $street, $zip_code, $user_id){
    //create instance of class
    $customer_object = new customer_class;

    //run the register query
    $run_query = $customer_object->update_customer($name, $number, $country, $city, $street, $zip_code, $user_id);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function lodge_complaint_fxn($user_id, $comment_title, $comment){
    //create instance of class
    $customer_object = new customer_class;

    //run the register query
    $run_query = $customer_object->lodge_complaint($user_id, $comment_title, $comment);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
    
}

?>
