<?php

//include core for session message
include('../settings/core.php');
include('../view/bootstrap.php');

//include controller
include('../controllers/product_controller.php');
include('../controllers/cart_controller.php');



if(isset($_GET['update_id']))

{
    $p_id=$_GET['update_id'];

    //call controller
    $selected=selectACartItem_contr($p_id);
    // var_dump($selected);
    // return;

    //set variables
    $qty=$selected['qty'];

    

    echo
    "
    <div class='container'>
            
      
    <form action='' method='POST' name='form'>
    <input type='hidden' name='p_id' value=".$selected['product_id'].">
    <table class='table table-striped table-bordered p-5 m-5 w-50 h-50'>
    <thead>
        <tr>
        <th scope='col'>Product Image</th>
        <th scope='col'>Manage Quantity</th>
        <th scope='col'>Update Quantity</th>
   

        </tr>
    </thead>
    <tbody>
            <tr>
            
            <td><img style='width:100px' src='../images/product/".$selected['product_image']."'></td>
            <td><input class='form-control' name='qty' type='number' value=".$qty."></td>
            <td>
            <button name='update' class='btn btn-info btn-sm' type='submit'>Update</button>
            </td>
          
            </tr>


    </form>
    </div>
    "
    ;

   
}

if(isset($_POST['update']))
{

    $p_id=$_POST['p_id'];
    $qty=$_POST['qty'];

     //call controller
     $itemToUpdate=updateItemQty_contr($p_id,$qty);

     //check if successful
     if($itemToUpdate)
     {
         //display a success message
         cartItemUpdate();
 
         //redirect to the cart page again
         goToCart();
 
     }
 
}

   




?>
