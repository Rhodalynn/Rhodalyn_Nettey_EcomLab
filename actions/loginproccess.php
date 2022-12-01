<?php 
include ('../controllers/general_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $customer_email= $_POST['customer_email'];
    $customer_pass= $_POST['customer_pass'];
    // echo $customer_email . " " . $customer_pass;
    $result = loginUser($customer_email);
    $encrypt = $result['customer_pass'];
    if(password_verify($customer_pass, $encrypt) AND $result['user_role'] == 1){
        session_start();
        $_SESSION['customer_id'] = $result['customer_id'];
        $_SESSION['cname'] = $result['customer_name'];
        $_SESSION['cemail'] = $result['customer_email'];
        $_SESSION['user_role'] = $result['user_role'];
        header("Location:../admin/brand.php");
    
    }
    else
    if(password_verify($customer_pass, $encrypt) AND $result['user_role'] != 1){
        session_start();
        $_SESSION['customer_id'] = $result['customer_id'];
        $_SESSION['cname'] = $result['customer_name'];
        $_SESSION['cemail'] = $result['customer_email'];
        $_SESSION['user_role'] = $result['user_role'];
        header("Location:../view/success.php");
    
    }

else{
    session_start();
    $_SESSION['error'] = 'Invalid login details.';
    header("Location:../view/login.php");

}
    // if ($result) {
    //     echo "<script>alert('Success')</script>";
    // }
    // else {
    //     echo "failed";
    // }

}

