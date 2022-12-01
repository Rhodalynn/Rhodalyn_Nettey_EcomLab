<?php

 include('../classes/cart_class.php');

  //Add to cart
   function addToCart_contr($p_id, $ip_add, $c_id, $qty)
      {
         //create an instance 
         $cart_item= new cart_class();

        //call the method from the instance
         return $cart_item->addToCart_cls($p_id, $ip_add, $c_id, $qty);
      }


      function itemExists_contr($p_id, $c_id)
        {
          //create an instance 
          $cart_item= new cart_class();

           //call the method from the instance
           return $cart_item->itemExists_cls($p_id,  $c_id);


        }

        function removeFromCart_contr($p_id)
        {
           //create an instance 
           $cart_item= new cart_class();

           //call the method from the instance
           return $cart_item->removeFromCart_cls($p_id);


        }   
        
        
        function updateItemQty_contr($p_id,$qty)
        {
           //create an instance 
           $cart_item= new cart_class();

           //call the method from the instance
           return $cart_item->updateItemQty_cls($p_id,$qty);

        }

        function selectACartItem_contr($p_id)
        {
           //create an instance 
           $cart_item= new cart_class();

           //call the method from the instance
           return $cart_item->selectACartItem_cls($p_id);

        }

        function selectAllFromCart_contr($p_id)
        {
           //create an instance 
           $cart_item= new cart_class();

           //call the method from the instance
           return $cart_item->selectAllFromCart_cls($p_id);

        }


         




?>