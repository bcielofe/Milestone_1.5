<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"> Trainers Guild-Links </a>	
	</div>
	<div class="collapse navbar-collapse navbar-right" id="myNavbar">
		<ul class="nav navbar-nav">
			<li> 
				<a href="home.php"> Home </a> 
			</li>	
			<li > <!-- class="dropdown" -->
				<a   href="contentarea.php"> Services <!-- class="dropdown-toggle" data-toggle="dropdown" -->
					<span class="caret"> 
					</span>  
				</a> 
				<!-- <ul class="dropdown-menu">
				    <li> 
				    	<a href="contentarea.php"> UPCAT Review </a> 
				    </li> 
				    <li> 
				    	<a href="#"> Civil Service Exam Review </a> 
				    </li> 
				    <li> 
				    	<a href="#"> NCE (Pisay Qualifying Exam) </a> 
				    </li> 
				    <li> 
				    	<a href="#"> Regular Tutorial </a> 
				    </li>
				    <li> 
				    	<a href="#"> Other Review and Tutorial Services </a>  
				    </li>
				</ul> -->
			</li>
			<li class="disabled"> <!-- disabled since it does not contain any information yet -->
			  	<a href="#"> Testimonials </a> 
			</li>
			<?php if(isset($_SESSION['email'])) { ?>
				<li> 
					<a href="cartservices.php"> Cart </a> 
				</li>
			
				<li> 
					<a href="logout.php">Logout</a>
				</li>
			<?php } ?>
		</ul>
		<!-- <form class="navbar-form navbar-right row">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"> 
				<span class="glyphicon glyphicon-search"> </span> 
			</button>
		</form> -->

		<!-- add previously commented out codes when SEARCH BAR is deemed necessary -->
	</div>
</div>
