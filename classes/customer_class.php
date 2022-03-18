<?php
//connect to database class
include_once (dirname(__FILE__)).'/../settings/db_class.php';

/**
*Customer class to handle everything customer related
*/
/**
 *@author Allotei Pappoe
 *
 */

class customer_class extends db_connection
{
    /*Method to register a new customer
    *takes name, email, password, country, city, street, zipcode, contact
    */

    public function register_customer($name, $email, $password, $country, $city, $street, $zip_code, $contact){
        $sql = "INSERT INTO `user`(`user_name`, `user_email`, `user_pass`, `user_country`, `user_city`, `user_street`, `zip_code`, `user_contact`, `user_role`) VALUES ('$name', '$email', '$password', '$country', '$city', '$street', '$zip_code', '$contact',2)";

        return $this->db_query($sql);
    }

    public function check_for_existing_customer($email){
        $sql = "SELECT `user_email` FROM `user` WHERE `user_email` = '$email'";

        return $this->db_query($sql);
    }

    /*Method to verify customer logins
    *takes email
    */

    public function verify_customer($email){
        $sql = "SELECT `user_email`, `user_pass`, `user_id`, `user_role` FROM `user` WHERE `user_email` = '$email'";

        return $this->db_query($sql);
    }
    
    /*Method to display customer profile
    *takes user id
    */
    
    public function display_customer($user_id){
        $sql = "SELECT * FROM `user` WHERE `user_id`='$user_id'";
        return $this->db_query($sql);
    }
    
    /*Method to update customer logins
    *takes full name, phone number, country
    *city, street, zip code, user id
    */
    
    public function update_customer($name, $number, $country, $city, $street, $zip_code, $user_id){
        $sql = "UPDATE `user` SET `user_name`='$name',`user_country`='$country',`user_city`='$city',`user_street`='$city',`zip_code`='$zip_code',`user_contact`='$number' WHERE `user_id`='$user_id'";
        return $this->db_query($sql);
    }
    
    /*Method to lodge complaints
    *takes title, user id, complaint
    */
    
    public function lodge_complaint($user_id, $comment_title, $comment){
        $sql = "INSERT INTO `comments`(`user_id`,  `complaint_title`, `comment`, `status`) VALUES ('$user_id', '$comment_title', '$comment', 'Unresolved')";
        return $this->db_query($sql);
    }
}
?>
