<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Services Cart </title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container-fluid">
	<header class="row"> 
		<nav class="navbar navbar-fixed-top navbar-inverse">
			<?php session_start(); require_once ('navbar.php') ?>
		</nav>
	</header>
	<main class="row" style="min-height: 600px;">
<?php 
$string = file_get_contents('services.json');
$services = json_decode($string, true);

if(isset($_SESSION['cart_services'])) {
	foreach ($_SESSION['cart_services'] as $key => $quantity) {
		$title = $services[$key]['title'];
		$image = $services[$key]['image'];
		$description = $services[$key]['description'];
		$price = $services[$key]['price'];
		$availableSlots = $services[$key]['availableSlots'];

		echo "<div class='col-xs-12 col-sm-6 col-md-4 collectiondetails'>";
			echo "<div class='cdetails'>";
				echo "<h3>".$title."</h3><span>Unit/s bought: $quantity </span>";
				echo "<img class='col-xs-12' src='".$image."'>";
				// echo "<p>".$description."</p>";
				echo "<p>Price: ".$price."</p>";
				echo "<p>In Stock: ".$availableSlots."</p>";
				echo "<a href='deletecartservices.php?deleteservices=$key'><button class='col-xs-12 col-sm-4 btn btn-default'>Delete</button></a>";
			echo "</div>";
		echo "</div>";
	}
}
?>
	</main>

	<footer class="row">
		<?php require_once ('footer.php') ?>
	</footer>
</body>
</html>

