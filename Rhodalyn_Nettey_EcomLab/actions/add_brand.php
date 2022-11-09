<?php 
include ('../controllers/product_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $brand_name= $_POST['brand'];
   
    // echo $customer_email . " " . $customer_pass;
    $result = insert_brand($brand_name);
    if ($result == TRUE) {
        echo "<script>alert('Success')</script>";
        header("Location:../admin/brand.php");
    }
    else {
        echo "failed";
    }
}

