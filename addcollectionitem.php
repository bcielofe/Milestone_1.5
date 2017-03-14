<?php 

if(isset($_POST['add'])){
	$string = file_get_contents("services.json");
	$services = json_decode($string, true);

	$new_services['title'] = $_POST['title'];
	$new_services['targetGroup'] = $_POST['targetGroup'];
	$new_services['image'] = $_POST['image'];
	$new_services['description'] = $_POST['description'];
	$new_services['price'] = $_POST['price'];
	$new_services['availableSlots'] = $_POST['availableSlots'];

	$services[] = $new_services;

	$fp = fopen('services.json', 'w');
	fwrite($fp, json_encode($services, JSON_PRETTY_PRINT));
	fclose($fp);
}

?>


<?php 
function getServices() {
	if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){ 
?>
<div class="outerdiv">
	<div class="col-xs-12 additem">
		<!-- <button class="btn btn-default addButton" type="submit" name="add">Add Collection</button> -->
	<!-- <div class="col-xs-12 additem" style='display:none'> -->
		<h3>Add NEW Collection Item</h3><br>
		<form class="form-horizontal formadd" method="POST">
			<div class="form-group">
				<label class="col-xs-4" for="title">Name:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="title">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="targetGroup">Target Group:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="targetGroup">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="image">Image:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="image">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="description">Description:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="description">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="price">Price:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="price">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="availableSlots">Available Slots:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="availableSlots">
			</div>
			<div class="col-xs-6">
				<button class="btn btn-default" type="submit" name="add">Add Collection</button>
			</div>
		</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	// $('.addButton').click(function(){
	// 	$('.additem').show();
	// 	$('.addButton').hide();
	// });
	
</script>
<?php 
	} else {
		echo "";
	}
}
?>