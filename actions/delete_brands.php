<?php
include('../controllers/product_controller.php');
include('../settings/core.php');


if(isset($_GET['delete_id']))
{
    $brand_id=$_GET['delete_id'];

    //call controller
    $sucessfullyDeletedBrand=delete_brand($id);

    if($sucessfullyDeletedBrand)
    {
        goToBrandPage();
    }

    else
    {
        echo "Could not delete brand 😑";
    }
}



?>