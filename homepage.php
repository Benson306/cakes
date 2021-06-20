<?php
	session_start();
	if(isset($_SESSION['email'])){?>



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
<title>Sweet Cakes</title>

<!-- CSS File-->
<link rel="stylesheet" type="text/css" href="index.css">
<style>
#search {
	background-color:  #f5f5f0;#ffc6b3
	padding: 10px;
}
.page{
	background-color: #f8ecec;#f2d9d9
}
</style>
	</head>
<body>

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
				<li><a href="orders.php">Check/Cancel Your Orders</a></li>
				<li><a href="cart.php"><img src="images/cart2.png" length="20px" width="20px"></a></li>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			</ul>
		</div>

	</div>
	
</nav>
<br>
<br>
<div class="page">
	<div class="container">

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/5c4e0f77c0d2d035e94dddef2c8f8294.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="data1/images/91bd1a76dd2879b0ac41debf70834694.jpg" alt="" title="" id="wows1_1"/></li>
		<li><img src="data1/images/a6fb0a04620eb10d133e7fbfb73685fa.jpg" alt="" title="" id="wows1_2"/></li>
		<li><img src="data1/images/d5e7e06de615be21af553fb94b682759.jpg" alt="" title="" id="wows1_3"/></li>
		<li><img src="data1/images/e0e8c868ce62e366513c9cdbd45ba24b.jpg" alt="" title="" id="wows1_4"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/e14ce5512d8fe9a88cc0af0298d5f1b1.jpg" alt="slideshow html code" title="" id="wows1_5"/></a></li>
		<li><img src="data1/images/images.jpg" alt="" title="" id="wows1_6"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/5c4e0f77c0d2d035e94dddef2c8f8294.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/91bd1a76dd2879b0ac41debf70834694.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/a6fb0a04620eb10d133e7fbfb73685fa.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/d5e7e06de615be21af553fb94b682759.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/e0e8c868ce62e366513c9cdbd45ba24b.jpg" alt=""/>5</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/e14ce5512d8fe9a88cc0af0298d5f1b1.jpg" alt=""/>6</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/images.jpg" alt=""/>7</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">image carousel</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<form class="form-group" action="search_results.php" method="post">
	<div class="col-md-12" id="search">
		<center><p>Search For A Cake:</p></center>
		<div class="col-md-3">
					<label>Type of Cake</label>
					
						<?php 
							$result= "SELECT type FROM types";
							$run = mysqli_query($conn, $result);
						?>
						<select class="form-control" required="yes" name="Stype">
							<option></option>
								<?php 
									while($rows=mysqli_fetch_assoc($run)){
									$type=$rows['type'];
									echo "<option value='$type'>$type</option>";
										}
								?>
						</select>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-3">
					<label>Weight(kg):</label>
					<select class="form-control" required="yes" name="Sweight">
						<option></option>
						<option value="0.5">0.5</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-3">
					<label >Shape:</label>
					<?php 
							$result= "SELECT shape FROM shapes";
							$run = mysqli_query($conn, $result);
						?>
						<select class="form-control" required="yes" name="Sshape">
							<option></option>
								<?php 
									while($rows=mysqli_fetch_assoc($run)){
									$shape=$rows['shape'];
									echo "<option value='$shape'>$shape</option>";
										}
								?>
						</select>
		</div>
		<div class="col-md-1">
			<br>
			<input type="submit" class="btn btn-danger" value="Search" name="search">
		</div>
		<br>
		<br>
		<br>
		<br>
	</div>

	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<H3 class="well well-sm">Top Deals</H3>

<br>
			<div class="col-md-12">
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					benji
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					benja
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					benedict
				</div>
			</div>
<br>

</div>

</div>

</body>



</html>

	<?php } else{ ?>
		<script>window.alert("You have not Logged in");window.location="index.php";</script>
	<?php }

?>