<?php
require("../controllers/customer_controller.php");
include_once("../controllers/cart_controller.php");
include_once("../settings/core.php");
$errors = array();
if(isset($_POST['submit'])){
    //grab form inputs
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_password = md5($password);

    //check if email has been submitted
    if(!empty($email)){
        $verify_customer = verify_customer_fxn($email);
        session_start();
        
        if($verify_customer){
            if($verify_customer['user_pass'] == $enc_password){
            
                $_SESSION['user_id'] = $verify_customer['user_id'];
                $_SESSION['user_role'] = $verify_customer['user_role'];
                $_SESSION['user_email'] = $verify_customer['user_email'];
                $ip_add = getRealIpAddr();
                $update_cart = update_cart_with_user_id_fxn($_SESSION['user_id'], $ip_add);
                header("location: ../index.php");
            }else{
                array_push($errors, "email or password is wrong");
                $_SESSION['notifs'] = $errors;
                
                header("location: ../view/login.php");
            }
        }else{
            array_push($errors, "email or password is wrong");
            $_SESSION['notifs'] = $errors;
            header("location: ../view/login.php");
        }
    }
}
?>
