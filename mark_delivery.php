
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
		<h3 class="well well-sm">MARK DELIVERY DATE </h3>
	</center>
	<a href="pending_orders.php" class="btn btn-primary">Back</a>
<div class="col-md-12">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<form method="post" class="form-group">
			<label>Delivery Date: (MM/DD/YYYY)</label>
			<input type="date" Placeholder="Delivery Date" name="date" class="form-control">
			<br>
			<input type="submit" name="submit" value="Submit" class="btn btn-block">
		</form>
	</div>
	<div class="col-md-4">
	</div>
</div>

<?php 
if(isset($_GET['deliver_id'])){
	$deliver_id = $_GET['deliver_id'];

		if(isset($_POST['submit'])){
			$date = mysqli_real_escape_string($conn,strip_tags($_POST['date']));

			$edit_sql = "UPDATE pending_order SET delivery_date ='$date' WHERE order_id ='$deliver_id' ";
			 if(mysqli_query($conn,$edit_sql) ) { ?>
			 	<script>
			 	window.alert("You Marked Delivery");
			 	window.location="pending_order.php";
			 	</script>
			 <?php } else { ?>
			 <script >
			 window.alert("Server Error. Retry");
			 window.location="pending_orders.php";
			 </script>
			 <?php }
		}


}

?>


</div>

</html>