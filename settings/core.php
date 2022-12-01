<?php

//start session
session_start(); 

//for header redirection
// ob_start();


//------------------------ REDIRECTION FUNCTIONS ------------------------//
function goToRegister()
{
    header("Location: ../login/register.php");
}

function goToLogin()
{
    header("Location: ../login/login.php");
}



function goToUserIndex()
{
    header("Location: ../view/userIndex.php");
}

function goToBrandPage()
{
    header("Location: ../admin/brand.php");
}

function goToCart()
{
    header("Location: ../view/cart.php");
}



//----------CATEGORY REDIRECTIONS----------------//
function goToCategoryPage()
{
    header("Location: ../admin/category.php");
}



//----------SESSION MESSAGES----//
function displaySuccessfulProcess()
{
    $_SESSION['successful_process']="Your operation was successful!";
}

function displaySuccessfulPayment()
{
    $_SESSION['successful_payment']="Your payment was successful!😍";
}

//--SESSION MESSAGES--//
function successfulCartItemAdd()
{
    $_SESSION['successful_cart_item']="Item was successfully added to cart!"; 
}

function successfulCartItemRemove()
{
    $_SESSION['successful_cart_remove']="Item was successfully aremoved from your cart!"; 
}

function failedCartItemAdd()
{
    $_SESSION['failed_cart_item']="Item is already in your cart! Please go to the cart page and increase the quantity instead🙂";
}


function cartItemUpdate()
{
    $_SESSION['success_cart_update']="Your quantity was updated successfully😎";
}



?>