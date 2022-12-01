<?php
include('../view/bootstrap.php');
include('../controllers/cart_controller.php');
include('../settings/core.php');

//get variables
$p_id=$_POST['p_id'];
$ip_add=$_POST['ip_add'];
$c_id=$_POST['c_id'];
$qty=1;


// checking
if(itemExists_contr($p_id, $c_id)==NULL){
    //call controller

    $itemToAdd=addToCart_contr($p_id,$ip_add,$c_id,$qty);

    successfulCartItemAdd();
    goToUserIndex();

}
else
{
    failedCartItemAdd();
    goToUserIndex();

  
}







?>