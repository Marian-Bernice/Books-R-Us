<?php
require_once("../settings/core.php");
require_once("../controllers/customer_controller.php");
$errors = array();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $zip_code = $_POST['zip_code'];
    $user_id = $_POST['user_id'];
    
    if(strlen($name) > 100){ array_push($errors, "name is too long");}
    if(strlen($country) > 30){ array_push($errors, "country is too long");}
    if(strlen($city) > 30){ array_push($errors, "city is too long");}
    if(strlen($street) > 30){ array_push($errors, "street is too long");}
    if(strlen($zip_code) > 30){ array_push($errors, "zip code is too long");}
    if(strlen($contact) > 15){ array_push($errors, "contact is too long");}
    
    if(count($errors) == 0){
        $update = update_customer_fxn($name, $contact, $country, $city, $street, $zip_code, $user_id);
        
        if($update){
            add_to_notifs("Profile has been updated");
        }else{
            $_SESSION['notifs'] = $errors;
        }
    }else{
        print_r($errors);
    }
}

?>