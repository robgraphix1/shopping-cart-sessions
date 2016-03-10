<?php

include $_SERVER['DOCUMENT_ROOT'] . 
'shopping-cart-sessions/includes/magicquotes.inc.php';

//makeshift database for testing
$items = array(
	array('id'=>'1', 'desc'=>'Canadian-Australian Dictionary', 'price'=>24.95),
 	array('id'=> '2', 'desc'=>'As-new parachute (never opened)',
        'price'=>1000),
    array('id'=> '3', 'desc'=>'Songs of The Goldfish (2CD set)',
        'price'=>19.99),
    array('id'=> '4', 'desc'=>'Simply JavaScript',
        'price'=>39.95)
	);


//initiate the session and empty cart
session_start();
if(!isset($_SESSION['cart']))
{
	$_SESSION['cart'] = array();
}


//if user chooses to buy an item, populate cart array with item id
if(isset($_POST['action']) and $_POST['action'] == "Buy")
{
	$_SESSION['cart'][] = $_POST['id'];
	header('Location: .');
	exit();
}

// if user chooses to view their cart
if(isset($_GET['cart']))
{
	$cart = array();
	$total = 0;

	foreach($_SESSION['cart'] as $id)
	{
		foreach($items as $product)
		{
			if($product['id'] == $id) 
			{
				$cart[] = $product;
				$total += $product['price'];
				break;
			}
		}
	}

	include 'cart.html.php';
	exit();
	
}


//user clicks button to empty their cart
if(isset($_POST['action']) and $_POST['action'] == 'Empty cart')
{
	unset($_SESSION['cart']);
	header('Location: ?cart');
	exit();
}

//default state
include 'catalog.html.php';