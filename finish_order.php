<?php
	session_start();
	if(isset($_SESSION['email'])){
		$session_email=$_SESSION['email'];
		?>

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
		<h3 class="well well-sm">COMPLETE ORDER </h3>
	</center>
	<a href="cart.php" class="btn btn-primary">Back</a>
<div class="col-md-12">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<form method="post" class="form-group">
			<label>Location: (Delivery is Done within Rongai)</label>
			<input type="text" Placeholder="Delivery is Done within Rongai" name="address" class="form-control">
			<br>
			<label>Phone Number: (Delivery is Done within Rongai)</label>
			<input type="text" Placeholder="07XXXXXXXX" name="phone" class="form-control">
			<br>
			<input type="submit" name="submit" value="Complete Order" class="btn btn-block">
		</form>
	</div>
	<div class="col-md-4">
	</div>
</div>
	
<!-- Sending products to cart-->
<?php
if(isset($_GET['cart_id'])){
	$cartid = $_GET['cart_id'];
	
	 $sql = "SELECT * FROM cart WHERE cart_id = '$cartid' ";
	 $run = mysqli_query($conn, $sql);
	 $rows = mysqli_fetch_assoc($run);
	 
 	$file=$rows['image'];
	$type=$rows['type'];
	$shape=$rows['shape'];
	$weight=$rows['weight'];
	$topping=$rows['topping'];
	$price=$rows['price'];
	

	if(isset($_POST['submit'])){
		$address = mysqli_real_escape_string($conn,strip_tags($_POST['address']));
		$phone = mysqli_real_escape_string($conn,strip_tags($_POST['phone']));

	$copy_sql ="INSERT INTO pending_order (email, type, shape, weight, topping, price, image, address, phone_number) VALUES ('$session_email','$type','$shape','$weight','$topping','$price','$file', '$address', '$phone')";

	mysqli_query($conn, $copy_sql);

	$del_sql = "DELETE FROM cart WHERE cart_id = '$cartid' ";
	mysqli_query($conn, $del_sql);

	?> <script>window.alert("You have successfully Placed your Order. Delivery is Done within 3 days.You will be contacted during delivery. Redirecting to your cart");window.location="cart.php"</script> <?php
	}
	

	}
?>

</div>

</html>
	<?php } else{ ?>
		<script>window.alert("You have not Logged in");</script>
	<?php }

?>