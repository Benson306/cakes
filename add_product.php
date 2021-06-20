
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

	<div class="col-md-12">
		<div class="col-md-3">

		</div>
		<div class="col-md-6 well well-sm">
			<form method="post" class="form-group" enctype="multipart/form-data">
				<center><h3>ADD PRODUCT</h3></center>
				<label>Type of Cake</label>
					
						<?php 
							$result= "SELECT type FROM types";
							$run = mysqli_query($conn, $result);
						?>
						<select class="form-control" required="yes" name="type">
							<option></option>
								<?php 
									while($rows=mysqli_fetch_assoc($run)){
									$type=$rows['type'];
									echo "<option value='$type'>$type</option>";
										}
								?>
						</select>
				<br>
				<label >Shape:</label>
					<?php 
							$result= "SELECT shape FROM shapes";
							$run = mysqli_query($conn, $result);
						?>
						<select class="form-control" required="yes" name="shape">
							<option></option>
								<?php 
									while($rows=mysqli_fetch_assoc($run)){
									$shape=$rows['shape'];
									echo "<option value='$shape'>$shape</option>";
										}
								?>
						</select>
				<br>
				<label >Toppings:</label>
					<?php 
							$result= "SELECT topping FROM toppings";
							$run = mysqli_query($conn, $result);
						?>
						<select class="form-control" required="yes" name="topping">
							<option></option>
								<?php 
									while($rows=mysqli_fetch_assoc($run)){
									$topping=$rows['topping'];
									echo "<option value='$topping'>$topping</option>";
										}
								?>
						</select>
				<br>
				<label>Price:(Ksh)</label>
				<input type="number" class="form-control" name="price" placeholder="price" required="yes">
				<br>
				<label>Weight:(kg)</label>
				<input type="text" class="form-control" name="weight" placeholder="weight" required="yes">
				<br>
				<label>Picture:</label>
				<input type="file" class="form-control" name="image" required="yes">
				<br>
				<input type="submit" class="btn btn-danger" value="Add" name="submit">
				<a href="admin_dashboard.php" class="btn btn-primary">Back</a>
			
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>

	
</html>

<?php 

if(isset($_POST['submit'])){


 $type = mysqli_real_escape_string($conn,strip_tags($_POST['type']));
 $shape = mysqli_real_escape_string($conn,strip_tags($_POST['shape']));
 $topping = mysqli_real_escape_string($conn,strip_tags($_POST['topping']));
 $price = mysqli_real_escape_string($conn,strip_tags($_POST['price']));
 $weight = mysqli_real_escape_string($conn,strip_tags($_POST['weight']));

 $target="images/".basename($_FILES["image"]["name"]);
 $file =$_FILES["image"]["name"];

move_uploaded_file($_FILES["image"]["tmp_name"], $target);

 	$sql = "INSERT INTO products (image, type, shape, topping, price, weight) VALUES ('$file', '$type','$shape','$topping','$price','$weight')";
	 	if(mysqli_query($conn, $sql)){
	 		?> <script>window.alert("Product Added Successfully");</script> <?php
	 	}else{
	 		?> <script>window.alert("Product Not Added");</script> <?php
 		}
	
}

?>
