<?php

// removed for editmodal function
// function //displayContent() {
	session_start();
	if(isset($_GET['key'])){
		$key = $_GET['key'];
		//JSON FILE
		$string = file_get_contents("services.json");
		$services = json_decode($string, true);

		//to edit
		if($_SESSION['role']=='admin'){

			if(isset($_POST['save'])){
				$string = file_get_contents("services.json");
				$services = json_decode($string, true);

				$new_services['title'] = $_POST['title'];
				$new_services['targetGroup'] = $_POST['targetGroup'];
				$new_services['image'] = $_POST['image'];
				$new_services['description'] = $_POST['description'];
				$new_services['price'] = $_POST['price'];
				$new_services['availableSlots'] = $_POST['availableSlots'];
				print_r($new_services);
		//replace an entire array
				$services[$key] = $new_services;
		// save
				$fp = fopen('services.json', 'w');
				fwrite($fp, json_encode($services, JSON_PRETTY_PRINT));
				fclose($fp);
		// relocate after click
				header('Location: contentarea.php');
			}
		}
	}
// }
// removed for edit modal function end

		// to show again the new array
		// $fp = fopen('cars.json', 'w');
		// fwrite($fp, json_encode($cars, JSON_PRETTY_PRINT));
		// fclose($fp);

		//no need to refresh
		// header('Location: template.php');

function editForm() {

	if(isset($_GET['key'])){
		$key = $_GET['key'];
		//JSON FILE
		$string = file_get_contents("services.json");
		$services = json_decode($string, true);

		echo "<div class='collectiondetails'>
			<div class='col-xs-12 additem'>
				<h3>Edit Collection Inventory</h3><br>
				<form class='form-horizontal formadd' method='POST'>
					<div class='form-group'>
						<label class='col-xs-4' for='title'>Name:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='title' value='".$services[$key]['title']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='targetGroup'>Target Group:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='targetGroup' value='".$services[$key]['targetGroup']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='image'>Image:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='image' value='".$services[$key]['image']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='description'>Description:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='description' value='".$services[$key]['description']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='price'>Price:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='price' value='".$services[$key]['price']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='availableSlots'>Available Slots:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='availableSlots' value='".$services[$key]['availableSlots']."'>
					</div>
					<button class='btn btn-default' type='submit' name='save'>Save Changes</button>
				</form>
			</div>
		</div>";
	}
}

// require_once('template.php');

?>