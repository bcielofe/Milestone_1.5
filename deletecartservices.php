<?php

//came from delete cart button key targeting
$row = $_GET['deleteservices'];

//delete cart item thru existing active session
session_start();
unset($_SESSION['cart_services'][$row]);

//no need to refresh
header('Location: cartservices.php');

?>
