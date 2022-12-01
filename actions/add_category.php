<?php 
include ('../controllers/product_controller.php');
//1- check if the button was clicked (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $category_name= $_POST['category'];
   
    // echo $customer_email . " " . $customer_pass;
    $result = insert_category($category_name);
    if ($result) {
        echo "<script>alert('Success')</script>";
        header("Location:../admin/category.php");

    }
    else {
        echo "failed";
    }
}

