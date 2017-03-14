<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Services-TGL </title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body class="container-fluid"> 
	<header class="row"> 
		<nav class="navbar navbar-fixed-top navbar-inverse">
			<?php require_once ('navbar.php') ?>
		</nav>
	</header>
	<main class="row" style="min-height: 600px;">
		<div> <!-- style="min-height: 600px;" -->
			<?php require_once('addcollectionitem.php');  ?>
			<?php require_once ('items.php') ?>
			<?php getServices(); ?>
		</div>
	</main>
	<footer class="row">
		<?php require_once ('footer.php') ?>
	</footer>

</body>
</html>