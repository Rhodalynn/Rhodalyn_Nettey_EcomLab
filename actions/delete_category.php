<?php
include('../controllers/product_controller.php');
include('../settings/core.php');


if(isset($_GET['delete_id']))
{
    $cat_id=$_GET['delete_id'];

    //call controller
    $sucessfullyDeletedCategory=delete_category($id);

    if($sucessfullyDeletedCategory)
    {
        goToCategoryPage();
    }

    else
    {
        echo "Could not delete Category 😑";
    }
}



?>