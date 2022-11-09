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

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>