<?php
session_start();
require_once 'app/autoloader.php';


if (isset($_POST['submitOrder'])) 
{
	header('Location: order.php');
  	exit;
} 
else 
{
	if (!isset($_POST['submitCart']))
	{
		if (!isset($_POST['cart'])) {
 	    echo "Товар не выбран!";
  	    header('Location: index.php');
  	    exit;

	} 
	else 
	{
    	$item = $_SESSION['productList']; $_SESSION['productList'] = 0;
    	foreach ($_POST['cart'] as $key => $value) 
    	{
        	$productlist[] = unserialize($item[$value]);
       	}
    	$myCart = new classes\cart\Cart($_SESSION['userName'], $productlist);
    	include 'cart1.php';
       	}
	} 
	else 
	{
	    $myCart = unserialize($_SESSION['myCart']);
	    if (isset($_POST['number'])) 
	    {
	    	$number = ($_POST['number']);
	    	$myCart->setProductNumber($number);
	    	$myCart->getSum();
	    } 
        if (isset($_POST['id'])) 
        {
        	$id = $_POST['id'];
	        $myCart->deleteProduct($id);
	        $myCart->getSum();
	    }
	    if (count($myCart->productList)) 
	    {
	    	include 'cart1.php';
	    } 
	    else 
	    { 
	        die('<h2>Корзина пуста!</h2><a href="index.php"> На главную </a>');
	    }
	}
}

?>