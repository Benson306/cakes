<html>
<head>
	<?php 
require('connection.php');
	?>
	<!-- bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- icons -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<!-- End of bootsrap -->
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<br>
<br>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
					<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#mainNavBar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Cakes</a>
		</div>
		<div class="nav navbar-expand-md collapse navbar-collapse" id="mainNavBar">
			<ul class="nav navbar-nav">
				<li><a href="homepage.php">Home</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="admin_login.php">Logout</a></li>
				<li><a href="#">Sign Up</a></li>
			</ul>
		</div>

	</div>
	
</nav>
<br>
<br>
<div class="container">
	<center>
		<h3 class="well well-sm">Administrator Dashboard </h3>
	</center>
<div class="col-md-12">
	<div class="col-md-5">
		<center>
		<a href="admin_signup.php" class="btn btn-warning btn-block">Add another Admin</a>
		<br>
		<br>
		<a href="edit_admin.php" class="btn btn-warning btn-block">Edit/Delete Admin Details</a>
		<br>
		<br>
		</center>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-5">
		<center>
		<a href="add_product.php" class="btn btn-primary btn-block">Add Product</a>
		<br>
		<br>
		<a href="edit_products.php" class="btn btn-primary btn-block">Edit/Delete Product</a>
		</center>
	</div>
</div>

<div class="col-md-12">
	<p class="well well-sm">Add/Edit Variables</p>
	<div class="col-md-5">
		<center>
		<a href="edit_cakes.php" class="btn btn-info btn-block">Add/Edit/Delete Types of Cakes</a>
		<br>
		<br>
		<a href="edit_toppings.php" class="btn btn-info btn-block">Add/Edit/Delete Toppings</a>
		<br>
		<br>
		</center>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-5">
		<center>
		<a href="add_shapes.php" class="btn btn-danger btn-block">Add/Edit/Delete Shapes</a>
		</center>
	</div>
</div>

<div class="col-md-12">
	<p class="well well-sm">Orders</p>
	
	<div class="col-md-5">
		<center>
		<a href="pending_orders.php" class="btn btn-success btn-block">View Pending Orders///Mark Delivery Dates</a>
		<br>
		<br>
		</center>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-5">
		<center>
		<a href="delivered.php" class="btn btn-success btn-block">View Delivered Orders</a>
		<br>
		<br>
		</center>
	</div>

</div>
</div>

</html>