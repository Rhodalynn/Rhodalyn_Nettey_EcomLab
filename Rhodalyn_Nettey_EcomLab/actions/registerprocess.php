<?php 
include ('../controllers/general_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $customer_name= $_POST['customer_name'];
    $customer_email= $_POST['customer_email'];
    $customer_pass= $_POST['customer_pass'];
    $conf_password= $_POST['conf_password'];
    $customer_country= $_POST['customer_country'];
    $customer_city= $_POST['customer_city'];
    $customer_contact= $_POST['customer_contact'];
    $user_role= 2;
    $encrypt_pass = password_hash($customer_pass, PASSWORD_DEFAULT);

    if($customer_pass == $conf_password){
        if(customer_controller($customer_name,$customer_email,$encrypt_pass,$customer_country,$customer_city,$customer_contact,$user_role)== TRUE){
            header('Location:../view/login.php');
        }
        else{echo "Cannot insert";}
    }
    else{echo "Cannot insert";}

    // echo $customer_name.$customer_email.$customer_pass.$conf_password.$customer_country.$customer_city.$customer_contact.$user_role;
    // return false;
 

    //$result = customer_controller($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role);
    

    
    // if ($result) {
    //     header( "Location: ../view/login.php ");
    // } else {
    //     echo 'failed';
    // }
    
    // if(customer_controller($customer_name,$customer_email,$customer_pass,$conf_password,$customer_country,$customer_city,$customer_contact,$user_role)!==true)
    // {
    //     header( "Location: ../view/register.php?error= User cannot register now !!! ");
    // } else{
    
    // }
    
}

// the JS version is: let full_name = document.getElementByID('full_name')

//3- Connect to the database
//Check if the connection works then continue


//4- write SQL query
//     prepared statement to check if there is a match in the DB
//     if it does not fail, then insert the data
//     now execute the statement
// 5- check if the query worked
// 6- Return true or false




?>