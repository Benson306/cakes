
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
				<li><a href="logout.php">Logout</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			</ul>
		</div>

	</div>
	
</nav>
<br>
<br>
<div class="container">
	<center>
		<h3 class="well well-sm">ORDERS THAT HAVE BEEN DELIVERED</h3>
	</center>
	<a href="admin_dashboard.php" class="btn btn-primary">Back</a>

	
<!-- Display orders-->

<?php

	 $sql = "SELECT * FROM pending_order WHERE  delivery_date  != ''";
	 $run = mysqli_query($conn, $sql);

		 echo "
		 <table class='table table-condensed'>
	 			<thead>
	 				<tr>
	 					<th>S.No.</th>
	 					<th>orderID</th>
	 					<th>Type</th>
	 					<th>Shape</th>
	 					<th>Topping</th>
	 					<th>Price</th>
	 					<th>Weight</th>
	 					<th>Delivery Location</th>
	 					<th>Phone Number</th>
	 					<th>Date Placed</th>
	 					<th>Date Delivered:</th>
	 					<th>Image:</th>
	 				</tr>
	 			</thead>
	 		<tbody>
		 "; 
		 $num = 1;
		 while($rows = mysqli_fetch_assoc($run) ) {
		 	echo "
		 		<tr>
		 		<td>$num</td>
		 		<td>$rows[order_id]</td>
		 		<td>$rows[type]</td>
		 		<td>$rows[shape]</td>
		 		<td>$rows[topping]</td>
		 		<td>$rows[price]</td>
		 		<td>$rows[weight]</td>
		 		<td>$rows[address]</td>
		 		<td>$rows[phone_number]</td>
		 		<td>$rows[date]</td>
		 		<td>$rows[delivery_date]</td>
		 		<td><img src='images/$rows[image]' class='img-rounded' width='150' height ='150'></td>
		 		</tr>
		 	";
		 $num++;
		 }
		
		 echo "</table>"; 


		?>

<!-- End of retrieving-->


	</div>

</html>