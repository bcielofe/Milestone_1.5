<div class="textcolor">
	<div class="col-xs-6">
		<button type="button" class="btn btn-default col-xs-12" data-toggle="modal" data-target="#addToCart<?php echo $key; ?>">Add To Cart</button>
	</div><!-- modal start -->
	<div class="modal fade" id="addToCart<?php echo $key; ?>" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Add To Cart</h3>
				</div>
				<div class="modal-body">
					<form class="form-group" method="POST" action='addtocartservices.php?key=<?php echo $key; ?>'>
						Quantity: <input class="form-control" type="number" name="quantity" min=0><br>
						<button class="btn btn-default" type="submit" name="addToCart">Add To Cart</button>
					</form>
				</div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
		</div>
	</div><!-- modal end -->
</div>