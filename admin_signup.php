
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
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.php">Login</a></li>
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
			<form method="post" class="form-group">
				<center><h3>ADMIN SIGN UP</h3></center>
				<label>Email:</label>
				<input type="email" class="form-control" name="email" placeholder="Email" required="yes">
				<br>
				<label>Username:</label>
				<input type="text" class="form-control" name="username" placeholder="Username" required="yes">
				<br>
				<label>Password:</label>
				<br>
				<input type="password" class="form-control" name="password" placeholder="Password" required="yes">
				<br>
				<label>Confirm Password:</label>
				<br>
				<input type="password" class="form-control" name="confpassword" placeholder="Confirm Password" required="yes">
				<br>
				<input type="submit" class="btn btn-danger" value="Sign Up" name="submit">
				<a href="admin_dashboard.php" class="btn btn-primary">Back</a>
			
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>

	
</html>

<?php 

if(isset($_POST['submit'])){


 $email = mysqli_real_escape_string($conn,strip_tags($_POST['email']));
 $username = mysqli_real_escape_string($conn,strip_tags($_POST['username']));
 $password = mysqli_real_escape_string($conn,strip_tags($_POST['password']));
 $confpassword = mysqli_real_escape_string($conn,strip_tags($_POST['confpassword']));

 $email_sql = "SELECT email FROM admin_login";
	$run = mysqli_query($conn, $email_sql);
		while($rows = mysqli_fetch_assoc($run) ) {
					$results=$rows['email'];
				}

if($email==$results){
	?> <script>window.alert("Email Already Exists");</script> <?php
}else{
	if($password==$confpassword){
 	$sql = "INSERT INTO admin_login (email, username, password) VALUES ('$email','$username','$password')";
	 	if(mysqli_query($conn, $sql)){
	 		?> <script>window.alert("Registered Successfully");</script> <?php
	 	}else{
	 		?> <script>window.alert("Operation Not Successfully");</script> <?php
 		}
	 }else{
	 	?> <script>window.alert("Password does not match");</script> <?php
	 }
}
 

}
?>
