<?php


use LDAP\Result;

require ('../settings/db_class.php');
//add, edit, and delete class

class product_class extends db_connection
{
    function product_class($brand_name)
    {
        // write the sql
        $sqlQuery="INSERT INTO `brands`(`brand_name`)
        VALUES ('$brand_name')";

        //execute with method in db_connection
        return $this->db_query($sqlQuery);
    }
    function Check_account_exist($brand_name)
    {
        $sqlQuery="SELECT * FROM `brands` WHERE `brand_name`='$brand_name'";
        return $this->db_query($sqlQuery);
    }

    function select_brands(){
        $sqlQuery = "SELECT * FROM `brands`";
        return $this-> db_fetch_all($sqlQuery);
    }

    function delete_brands($id){
        $sqlQuery = "DELETE FROM `brands` WHERE `brand_id` = '$id'";
        return $this-> db_query($sqlQuery);
    }

    function selectOneBrand($id){
        $sqlQuery = "SELECT * FROM `brands` WHERE `brand_id` = '$id'";
        return $this-> db_fetch_one($sqlQuery);
    }

    function updateBrand($id, $brand_name){
        $sqlQuery = "UPDATE `brands` SET `brand_name` = '$brand_name' WHERE `brand_id` = '$id'";
        return $this-> db_query($sqlQuery);
    }

//Sql queries for categories
    function product1_class($category_name)
    {
        // write the sql
        $sqlQuery="INSERT INTO `categories`(`category_name`)
        VALUES ('$category_name')";

        //execute with method in db_connection
        return $this->db_query($sqlQuery);
    }
    function Check_account_exist1($category_name)
    {
        $sqlQuery="SELECT * FROM `categories` WHERE `category_name`='$category_name'";
        return $this->db_query($sqlQuery);
    }

    function select_category(){
        $sqlQuery = "SELECT * FROM `categories`";
        return $this-> db_fetch_all($sqlQuery);
    }

    function delete_category($id){
        $sqlQuery = "DELETE FROM `categories` WHERE `category_id` = '$id'";
        return $this-> db_query($sqlQuery);
    }

    function selectOneCategory($id){
        $sqlQuery = "SELECT * FROM `categories` WHERE `category_id` = '$id'";
        return $this-> db_fetch_one($sqlQuery);
    }

    function updateCategory($id, $category_name){
        $sqlQuery = "UPDATE `categories` SET `category_name` = '$category_name' WHERE `category_id` = '$id'";
        return $this-> db_query($sqlQuery);
    }

        //add products

        public function addProduct_cls($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords)
        {
            $sqlQuery="INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
    
            //run query
            return $this->db_query($sqlQuery);
        }
    
        //select products
        public function selecetAllProducts_cls()
        {
            $sql="SELECT * FROM `products`";
    
            //run query
            return $this->db_fetch_all($sql);
            
        }
    
        //select on product
        public function selectOneProduct_cls($product_id)
        {
            $sql="SELECT * FROM `products` WHERE `product_id` = '$product_id'";
    
            //run query
            return $this->db_fetch_one($sql);
        }
    
        //update one product
        public function updateOneProduct_cls($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords) 
        {
            $sqlQuery="UPDATE `products` SET `product_id`='$product_id',`product_cat`='$product_cat',`product_brand`='$product_brand',`product_title`='$product_title',`product_price`='$product_price',`product_desc`='$product_desc',`product_image`='$product_image',`product_keywords`='$product_keywords' WHERE `product_id`='$product_id'";
    
            //run query
            return $this->db_query($sqlQuery);
        }
    
    
        //search for product
        public function productSearch_cls($product_keywords)
        {
            $sql="SELECT * FROM `products` WHERE `product_keywords` LIKE  '%$product_keywords%'  ";
    
            //run query
            return $this->db_fetch_all($sql);
        }
    
    
    
    
        
    }
    
    
    
    
    
    
    
    ?>




}

?>