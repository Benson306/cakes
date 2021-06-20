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
		<h3 class="well well-sm">Edit Product Details </h3>
	</center>
	<a href="admin_dashboard.php" class="btn btn-warning">Back</a>
			
	<br>
	<br>
<!-- retrieving from the database !-->
<?php
	 $sql = "SELECT * FROM products";
	 $run = mysqli_query($conn, $sql);

		 echo "
		 <table class='table table-condensed'>
	 			<thead>
	 				<tr>
	 					<th>S.No.</th>
	 					<th>Image:</th>
	 					<th>Type</th>
	 					<th>Shape</th>
	 					<th>Topping</th>
	 					<th>Price</th>
	 					<th>Weight</th>
	 					<th>Edit</th>
	 					<th>Delete</th>
	 				</tr>
	 			</thead>
	 		<tbody>
		 "; 
		 $num = 1;
		 while($rows = mysqli_fetch_assoc($run) ) {
		 	echo "
		 		<tr>
		 		<td>$num</td>
		 		<td><img src='images/$rows[image]' class='img-rounded' width='150' height ='150'></td>
		 		<td>$rows[type]</td>
		 		<td>$rows[shape]</td>
		 		<td>$rows[topping]</td>
		 		<td>$rows[price]</td>
		 		<td>$rows[weight]</td>
	 			<th><a href='edit_products.php?edit_id=$rows[product_id]' class='btn btn-primary'>Edit</button></a></th>
	 			<th><a href='edit_products.php?del_id=$rows[product_id]' class='btn btn-danger'>Delete</button></a></th>
		 		</tr>
		 	";
		 $num++;
		 }
		
		 echo "</table>"; 
		?>

<!-- End of retrieving-->
</div>

<!-- Deleting cuorse from database-->
<?php 
if(isset($_GET['del_id'])){
	$del_sql = "DELETE FROM products WHERE product_id = '$_GET[del_id]' ";
	if(mysqli_query($conn, $del_sql)) { ?>
	<script>
	window.location="edit_products.php";
	</script>
	<?php } else { ?>
	<script>
	window.alert("Server Error. Retry");
	window.location="edit_products.php";
	</script>

	<?php }
}
?>
<!-- End of deleting course from Database -->

<!--form for editting -->
<?php 
	if (isset($_GET['edit_id']) ) { 
		$sql = "SELECT * FROM products WHERE product_id = '$_GET[edit_id]' ";
		$run = mysqli_query($conn, $sql);
		while( $rows= mysqli_fetch_assoc($run) ) {
			$type = $rows['type'];
			$shape = $rows['shape'];
			$topping = $rows['topping'];
			$price = $rows['price'];
			$weight = $rows['weight'];
		}
		?>
		<div class="col-md-12">
		<div class="col-md-3">

		</div>
		<div class="col-md-6 well well-sm">
			<form method="post" class="form-group" enctype="multipart/form-data">
				<center><h3>ADD PRODUCT</h3></center>
				<label>Type of Cake:</label>
				<select required="yes" class="form-control" name="type">
					<option><?php echo $type; ?></option>
					<option>Vanilla</option>
					<option>Chocolate</option>
					<option>Mint</option>
				</select>
				<br>
				<label>Shape:</label>
				<select required="yes" class="form-control" name="shape">
					<option><?php echo $shape; ?></option>
					<option>Square</option>
					<option>Round</option>
					<option>Butterfly</option>
					<option>Pots</option>
					<option>Hexagonal</option>
				</select>
				<br>
				<label>Topping:</label>
				<select required="yes" class="form-control" name="topping">
					<option><?php echo $topping; ?></option>
					<option>chocolate</option>
					<option>strawberry</option>
					<option>confetti</option>
				</select>
				<br>
				<label>Price:(Ksh)</label>
				<input type="number" class="form-control" name="price" value="<?php echo $price; ?>" placeholder="price" required="yes">
				<br>
				<label>Weight:(kg)</label>
				<input type="text" class="form-control" name="weight" value="<?php echo $weight; ?>" placeholder="weight" required="yes">
				<br>
				<label>Picture:</label>
				<input type="file" class="form-control" name="image" required="yes">
				<br>
				<input type="hidden" value="<?php echo $_GET['edit_id'] ?>" name="edit_product_id"></p>
				<input type="submit" class="btn btn-danger" value="Submit Edit" name="submit">
				<a href="admin_dashboard.php" class="btn btn-primary">Back</a>
			
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>

		<?php }
?>

<!-- Editing data in a database -->
<?php 
if (isset($_POST['submit'] ) ){

	
	 $type = mysqli_real_escape_string($conn,strip_tags($_POST['type']));
	 $shape = mysqli_real_escape_string($conn,strip_tags($_POST['shape']));
	 $topping = mysqli_real_escape_string($conn,strip_tags($_POST['topping']));
	 $price = mysqli_real_escape_string($conn,strip_tags($_POST['price']));
	 $weight = mysqli_real_escape_string($conn,strip_tags($_POST['weight']));
	

	$edit_id = $_POST['edit_product_id']; //passes the course id

	$target="images/".basename($_FILES["image"]["name"]);
 	$file =$_FILES["image"]["name"];

	move_uploaded_file($_FILES["image"]["tmp_name"], $target);

	$edit_sql = "UPDATE products SET image='$file', type = '$type', shape='$shape', topping= '$topping', price='$price', weight='$weight'  WHERE product_id ='$edit_id' ";
	 if(mysqli_query($conn,$edit_sql) ) { ?>
	 	<script>
	 	window.alert("You have succesfully Edited");
	 	window.location="edit_products.php";
	 	</script>
	 <?php } else { ?>
	 <script >
	 window.alert("Server Error. Retry");
	 window.location="edit_products.php";
	 </script>
	 <?php }
}

?>


<!-- End of editing data in a database -->




</div>

</html>