
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
				<li><a href="#">Home</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Login</a></li>
				<li><a href="signup.php">Sign Up</a></li>
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
				<center><h3>LOGIN TO CONTINUE</h3></center>
				<label>Email:</label>
				<input type="email" class="form-control" name="email" placeholder="Email" required="yes">
				<br>
				<label>Password:</label>
				<br>
				<input type="password" class="form-control" name="password" placeholder="Password" required="yes">
				<br>
				<input type="submit" class="btn btn-primary" value="Login" name="submit">
				 <a href="signup.php">Not Registered?</a>
				<button class="btn btn-danger"><a href="signup.php">Sign Up</a></button>
			
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>

	
</html>


<?php 
if(isset($_POST['submit'])){
	$email = mysqli_real_escape_string($conn,strip_tags($_POST['email']));
	$password = mysqli_real_escape_string($conn,strip_tags($_POST['password']));

$sql= "SELECT * FROM users WHERE email='$email'";
$run = mysqli_query($conn,$sql);
$count= mysqli_num_rows($run);
$rows=mysqli_fetch_assoc($run);
$passcode=$rows['password'];

if($count>0){
	if($password==$passcode){
		?><script>window.alert("Logged IN");window.location="homepage.php"</script> 
		<?php
		session_start();
		$_SESSION['email']=$email;
		echo "set";
	}else{
		?><script>window.alert("Password is incorrect");</script> <?php
	}
}else{ 
	?><script>window.alert("User Does Not Exist");</script> <?php
}

}
?>