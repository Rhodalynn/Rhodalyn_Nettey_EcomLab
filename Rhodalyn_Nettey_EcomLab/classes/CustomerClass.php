<?php


use LDAP\Result;

require ('../settings/db_class.php');
//add, edit, and delete class

class CustomerClass extends db_connection
{
    function customer_class($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role)
    {
        // write the sql
        $sqlQuery="INSERT INTO customer (`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`,`user_role`)
            VALUES ('$customer_name','$customer_email','$customer_pass','$customer_country','$customer_city','$customer_contact','$user_role')";
        //execute with method in db_connection
        return $this->db_query($sqlQuery);
    }
    function Check_account_exist($customer_email)
    {
        $sqlQuery="SELECT * FROM `customer` WHERE `customer_email`='$customer_email'";
        return $this->db_fetch_one($sqlQuery);
    }
    
    
}



?>