<?php
//connect to database class
include_once (dirname(__FILE__)).'/../settings/db_class.php';

/**
*Customer class to handle everything cart related
*/
/**
 *@author Allotei Pappoe
 *
 */

class cart_class extends db_connection
{
    //method to insert into the cart when customer has logged in
    public function insert_into_cart_log($isbn, $ip_add, $user_id, $qty){
        $sql = "INSERT INTO `cart`(`isbn`, `ip_add`, `user_id`, `qty`) VALUES ('$isbn','$ip_add','$user_id','$qty')";
        return $this->db_query($sql);
    }

    //method to insert into the cart when the customer hasn't logged in
    public function insert_into_cart_nlog($isbn, $ip_add, $qty){
        $sql = "INSERT INTO `cart`(`isbn`, `ip_add`, `qty`) VALUES ('$isbn','$ip_add','$qty')";
        return $this->db_query($sql);
    }

    //check for duplicates
    //logged in customers
    public function check_duplicate_log($isbn, $user_id){
        $sql = "SELECT `isbn`, `user_id` FROM `cart` WHERE `isbn`='$isbn' AND `user_id`='$user_id'";

        return $this->db_query($sql);
    }

    //not logged in customers
    public function check_duplicate_nlog($isbn, $ip_add){
        $sql = "SELECT `isbn`, `ip_add` FROM `cart` WHERE `isbn`='$isbn' AND `ip_add`='$ip_add'";

        return $this->db_query($sql);
    }

    //display cart
    //logged in customers
    public function view_cart($user_id){
        $sql = "SELECT `cart`.`isbn`, `cart`.`user_id`, `cart`.`qty`, `books`.`book_title`, `books`.`book_price`, `books`.`book_image` FROM `cart` JOIN `books` ON (`cart`.`isbn` = `books`.`isbn`) WHERE `cart`.`user_id`='$user_id'";
        return $this->db_query($sql);
    }

    //not logged in customers
    public function view_cart_nlog($ip_add){
        $sql = "SELECT `cart`.`isbn`, `cart`.`ip_add`, `cart`.`qty`, `books`.`book_title`, `books`.`book_price`, `books`.`book_image` FROM `cart` JOIN `books` ON (`cart`.`isbn` = `books`.`isbn`) WHERE `cart`.`ip_add`='$ip_add'";
        return $this->db_query($sql);
    }

    public function update_cart_item_qty($isbn, $user_id, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `isbn`='$isbn' AND `user_id`='$user_id'";
        return $this->db_query($sql);
    }

    public function update_cart_item_nlog_qty($isbn, $ip_add, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `isbn`='$isbn' AND `ip_add`='$ip_add'";
        return $this->db_query($sql);
    }

    public function delete_cart_item($isbn, $user_id){
        $sql = "DELETE FROM `cart` WHERE `isbn`='$isbn' AND `user_id`='$user_id'";
        return $this->db_query($sql);
    }

    public function delete_cart_item_nlog($isbn, $ip_add){
        $sql = "DELETE FROM `cart` WHERE `isbn`='$isbn' AND `ip_add`='$ip_add'";
        return $this->db_query($sql);
    }
    
    public function get_cart_items_no($user_id){
        $sql = "SELECT count(`user_id`) AS `count` FROM `cart` WHERE `user_id`='$user_id'";
        return $this->db_query($sql);
    }
    
    public function get_cart_items_no_nlog($ip_add){
        $sql = "SELECT count(`ip_add`) AS `count` FROM `cart` WHERE `ip_add`='$ip_add'";
        return $this->db_query($sql);
    }
    
    public function get_cart_value($user_id){
        $sql = "SELECT SUM(`books`.`book_price`*`cart`.`qty`) as Result FROM `cart` JOIN `books` ON (`books`.`isbn` = `cart`.`isbn`) WHERE `cart`.`user_id` = '$user_id'";
        return $this->db_query($sql);
    }
    
    public function update_cart_with_user_id($user_id, $ip_add){
        $sql = "UPDATE `cart` SET `user_id`='$user_id' WHERE `ip_add`='$ip_add'";
        return $this->db_query($sql);
    }
    
    public function add_order($user_id, $invoice_no, $order_date, $order_status){
        $sql = "INSERT INTO `orders`(`user_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$user_id', '$invoice_no', '$order_date', '$order_status')";
        return $this->db_query($sql);
    }
    
    
    
    public function add_order_details($order_id, $isbn, $qty, $book_price){
        $sql = "INSERT INTO `order_details`(`order_id`, `isbn`, `qty`, `book_price`) VALUES('$order_id', '$isbn', '$qty', '$book_price')";
        
        return $this->db_query($sql);
    }
    
    public function recent_order(){
        $sql = "SELECT MAX(`order_id`) as recent FROM `orders`";
        return $this->db_query($sql);
    }
    
    public function add_payment($amt, $user_id, $order_id, $currency, $pay_date){
        $sql="INSERT INTO `payment`(`amt`, `user_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amt', '$user_id', '$order_id', '$currency', '$pay_date')";
        return $this->db_query($sql);
    }
    
    public function clear_cart($user_id){
        $sql = "DELETE FROM `cart` WHERE `user_id`='$user_id'";
        return $this->db_query($sql);
    }
    
    public function get_order($order_id){
        $sql = "SELECT  `user`.`user_name`, `orders`.`order_id`, `orders`.`invoice_no`, `orders`.`order_date`, `orders`.`order_status` FROM `orders` JOIN `user` ON (`user`.`user_id` = `orders`.`user_id`) WHERE `orders`.`order_id` = '$order_id'";
        return $this->db_query($sql);
    }
    
    public function get_order_details($order_id){
        $sql = "SELECT `books`.`book_title`,`books`.`book_price`, `books`.`stock`, `order_details`.`qty`, `order_details`.`qty`*`books`.`book_price` as result FROM `order_details` JOIN `books` ON (`order_details`.`isbn` = `books`.`isbn`) WHERE `order_id`='$order_id'";
        
        return $this->db_query($sql);
    }
    
    public function update_stock($isbn, $r_qty){
        $sql = "UPDATE `books` SET `stock`='$r_qty' WHERE `isbn`= $isbn";
        return $this->db_query($sql);
    }
    
    public function get_stock($isbn){
        $sql = "SELECT `stock` FROM `books` WHERE `isbn`='$isbn'";
        return $this->db_query($sql);
    }

}
