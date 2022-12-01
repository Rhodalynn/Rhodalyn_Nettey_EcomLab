<?php 
include ('../controllers/product_controller.php');


if(isset($_POST["delete"])){
    //get the id
    $pid=$_POST['pid'];
    if(delete_brand($pid)==false){
        echo 'Not deleted';
    }else {
        header( "Location: ../admin/brand.php ");
    }
    
}

if(isset($_POST["delete"])){
    //get the id
    $pid=$_POST['pid'];
    if(delete_category($pid)==false){
        echo 'Not deleted';
    }else {
        header( "Location: ../admin/category.php ");
    }
    
}



?>