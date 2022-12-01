<?php


 require_once('../settings/db_class.php');

 class cart_class extends db_connection
 {

   
   
    public function addToCart_cls($p_id,$ip_add,$c_id,$qty)
    {
        //database insertion
        $sqlQuery="INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$p_id','$ip_add', '$c_id', '$qty') ";

        //run query
        return $this->db_query($sqlQuery);
    }

    public function itemExists_cls($p_id , $c_id)
    {
        $sql="SELECT * FROM `cart` WHERE `p_id` = '$p_id' AND `c_id` ='$c_id' ";

        //run query
        return $this->db_fetch_one($sql);
    }


   //Remove from cart
    public function removeFromCart_cls($p_id)
    {
        //sql query
        $sqlQuery="DELETE FROM `cart` WHERE `p_id` = '$p_id' ";

        //run query
        return $this->db_query($sqlQuery);


    }

    public function updateItemQty_cls($p_id,$qty)
    {
        $sqlQuery="UPDATE `cart` SET `qty`='$qty' WHERE `p_id`='$p_id'";

        //run query
        return $this->db_query($sqlQuery);


    }

    public function selectACartItem_cls($p_id)
    {
        $sql="SELECT `products`.`product_image`, `cart`.`qty`, `products`.`product_id`  FROM `products` INNER JOIN `cart` ON `products`.`product_id`=`cart`.`p_id`  WHERE `p_id` = '$p_id' ";

    
        //run query
        return $this->db_fetch_one($sql);
    }


    public function selectAllFromCart_cls()
    {
        $sql="SELECT `products`.`product_title`,`products`.`product_image`, `products`.`product_price`, `cart`.`qty`, `products`.`product_id`  FROM `products` INNER JOIN `cart` ON `products`.`product_id`=`cart`.`p_id`  ";

         //run query
         return $this->db_fetch_all($sql);
    } 


    
 }





?>