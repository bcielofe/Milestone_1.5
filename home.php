<?php
	session_start();
	require_once ('login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Home-TGL </title>
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
		<div class="col-md-9 banner">
			<?php require_once ('banner.php') ?>
		</div>

		<!-- to center the login page when view is small-->
		<div class="col-sm-2"> </div> 
		<div class="col-md-3 col-sm-8 login">
			<?php 
				if(!isset($_SESSION['email']))
					display_forms();
				else 
					require_once ('about.php');
			?>
		</div>
		<div class="col-sm-2"></div>
		<!-- to center the login page when view is small-->

	</header>
	<main class="row">
		
	</main>
	<footer class="row">
		<?php require_once ('footer.php') ?>
	</footer>

</body>
</html>