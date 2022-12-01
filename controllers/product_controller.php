<?php
//connect to the user account class
include("../classes/product_class.php");

//sanitize data

 

//--INSERT--//

function insert_brand($brand_name)
{
    //check if passwords are the same
    $add_product= new product_class();
    return $add_product->product_class($brand_name);
}

function view_brand()
{
    //check if passwords are the same
    $view_brand= new product_class();
    return $view_brand->select_brands();
}

function delete_brand($id)
{
    //check if passwords are the same
    $delete_brand= new product_class();
    return $delete_brand->delete_brands($id);
}

function selectOneBrand($id)
{
    //check if passwords are the same
    $selectOneBrand= new product_class();
    return $selectOneBrand->selectOneBrand($id);
}

function updateBrand($id, $brand_name)
{
    //check if passwords are the same
    $updateBrand= new product_class();
    return $updateBrand->updateBrand($id, $brand_name);

}

//Insert, view, delete, select, and update category

function insert_category($category_name)
{
    //check if passwords are the same
    $add_category= new product_class();
    return $add_category->product_class($category_name);
}

function view_category()
{
    //check if passwords are the same
    $view_category= new product_class();
    return $view_category->select_category();
}

function delete_category($id)
{
    //check if passwords are the same
    $delete_category= new product_class();
    return $delete_category->delete_category($id);
}

function selectOneCategory($id)
{
    //check if passwords are the same
    $selectOneCategory= new product_class();
    return $selectOneCategory->selectOneCategory($id);
}

function updateCategory($id, $category_name)
{
    //check if passwords are the same
    $updateCategory= new product_class();
    return $updateCategory->updateCategory($id, $category_name);

}

//SEARCH
function productSearch_ctr($product_keywords)
{
    //instantiate
    $product= new product_class();

    //run method
    return $product->productSearch_cls($product_keywords);
}

function selectAllFromCart_ctr()
    {
     $items = new product_class();
            
     //call method
    return $items->selectAllFromCart_cls();
    }

    function selectACartItem_ctr($p_id)
    {
        //create an instance 
        $cart_item= new product_class();

        //call the method from the instance
        return $cart_item->selectACartItem_cls($p_id);

    }

    //ADD A PRODUCT
function addProduct_ctr($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords)
{
    $newProduct = new product_class();

    //run method
    return $newProduct->addProduct_cls($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);
}

//SELECT ALL PRODUCTS
function selecetAllProducts_ctr()
{
    $products= new product_class();

    //run method
    return $products->selecetAllProducts_cls();
}

//SELECT ONE PRODUCT
function selectOneProduct_ctr($product_id)
{
    $product= new product_class();

    //run method
    return $product->selectOneProduct_cls($product_id);
}

//UPDATE ONE PRODUCT
function updateOneProduct_ctr($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords)
{
    $product= new product_class();

    //run method
    return $product->updateOneProduct_cls($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);

} 
//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>