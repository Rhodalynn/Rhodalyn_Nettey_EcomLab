<?php
//connect to the user account class
include("../classes/CustomerClass.php");

//sanitize data

 

//--INSERT--//

function customer_controller($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role)
{
    //check if passwords are the same
    $add_customer= new CustomerClass();
    return $add_customer->customer_class($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role);
    
}

function loginUser($customer_email)
    {
        $result= new CustomerClass();
        return $result ->  Check_account_exist($customer_email);
    } 



//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>