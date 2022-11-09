<?php
require("../controllers/product_controller.php");

if(isset($_POST['edit'])){
    $name = $_POST['brand'];
    $id = $_POST['bid'];
    if(updateBrand($id, $name)==true){
        header("Location:../admin/brand.php");
    
    }

    else{
        echo "Cannot update.";
    }
}

?>