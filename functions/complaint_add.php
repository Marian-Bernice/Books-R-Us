<?php
require_once("../controllers/customer_controller.php");
require_once("../settings/core.php");
$errors = array();

if(isset($_POST['submit'])){
    $complaint_title = $_POST['complaint_title'];
    $complaint = $_POST['complaint'];
    $user_id = $_POST['user_id'];
    
    if(strlen($complaint_title) > 100){
        array_push($errors, "Title is too long");
        add_to_notifs("Title is too long");
    }
    if(strlen($complaint) > 500){
        array_push($errors, "Your message is over 500 characters please consider rewording it");
        add_to_notifs("Your message is over 500 characters please consider rewording it");
    }
    
    if(count($errors) == 0){
        $insert_complaint = lodge_complaint_fxn($user_id, $complaint_title, $complaint);
        if($insert_complaint){
            //echo "success";
            add_to_notifs("Your complaint has been noted");
        }else{
            $_SESSION['notifs'] = $errors;
        }
    }
}

?>