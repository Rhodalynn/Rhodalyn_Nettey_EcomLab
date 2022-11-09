<?php
require("../controllers/product_controller.php");

if(isset($_POST['edit'])){
    $name = $_POST['category'];
    $id = $_POST['pid'];
    if(updateCategory($id, $name)==true){
        header("Location:../admin/category.php");
    
    }

    else{
        echo "Cannot update.";
    }
}

?>