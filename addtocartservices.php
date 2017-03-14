<?php

session_start();
$key = $_GET['key'];
$quantity = $_POST['quantity'];


if(isset($_SESSION['cart_services'][$key])){
	$_SESSION['cart_services'][$key]+=$quantity;
} else {
	$_SESSION['cart_services'][$key] = $quantity;
}

header('location: contentarea.php');

?>