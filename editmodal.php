<div class="textcolor">
	<div class="col-xs-6">
		<button type="button" class="btn btn-default col-xs-12" data-toggle="modal" data-target="#edit<?php echo $key; ?>">Edit</button>
	</div>
	<!-- modal start -->
	<div class="modal fade" id="edit<?php echo $key; ?>" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Edit <?php echo "$title"; ?>Collection Inventory</h3>
				</div>
				<div class="modal-body">
					<form class="form-group" method="POST" action='edit.php?key=<?php echo $key; ?>'>
						<div class="form-group">
							<label for="title">Name:</label>
							<input class="textcolor form-control" type="text" name="title" value="<?php echo $title; ?>">
							<!-- value name calling not specified like original value='".$cars[$key]['name']."' because cars.json source not set at the beginning of codes -->
						</div>
						<div class="form-group">
							<label for="targetGroup">Target Group:</label>
							<input class="textcolor form-control" type="text" name="targetGroup" value="<?php echo $targetGroup; ?>">
						</div>
						<div class="form-group">
							<label for="image">Image:</label>
							<input class="textcolor form-control" type="text" name="image" value="<?php echo $image; ?>">
						</div>
						<div class="form-group">
							<label for="description">Description:</label>
							<input class="textcolor form-control" type="text" name="description" value="<?php echo $description; ?>">
						</div>
						<div class="form-group">
							<label for="price">Price:</label>
							<input class="textcolor form-control" type="text" name="price" value="<?php echo $price; ?>">
						</div>
						<div class="form-group">
							<label for="availableSlots">Available Slots:</label>
							<input class="textcolor form-control" type="text" name="availableSlots" value="<?php echo $availableSlots; ?>">
						</div>
						<button class="btn btn-default" type="submit" name="save">Save Changes</button>
					</form>
				</div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
		</div>
	</div><!-- modal end -->
</div>