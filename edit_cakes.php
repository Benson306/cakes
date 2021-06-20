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
	<a href="admin_dashboard.php" class="btn btn-warning">Back</a>
			
	<br>
	<br>


<div class="col-md-12">
		<div class="col-md-3">

		</div>
		<div class="col-md-6 well well-sm">
			<form method="post" class="form-group">
				<center><h3>ADD TYPES OF CAKES</h3></center>
				<label>Type of Cake:</label>
				<input type="text" class="form-control" name="ctype" placeholder="Type of cake" required="yes">
				<br>
				<input type="submit" class="btn btn-success" value="Save" name="submit">
				<a href="admin_dashboard.php" class="btn btn-primary">Back</a>
			
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>
<!-- Input to database -->
<?php 
if(isset($_POST['submit'])){
	$ctype = mysqli_real_escape_string($conn,strip_tags($_POST['ctype']));
	$submit_sql = "INSERT INTO types (type) VALUES ('$ctype')";
	if(mysqli_query($conn,$submit_sql)){
		?><script>window.alert("Type of Cake submitted succesfully");</script> <?php
	}else{
		?><script>window.location("edit_cakes.php");</script> <?php
	}

}

?>

<!-- retrieving from the database !-->
<?php
	 $sql = "SELECT * FROM types";
	 $run = mysqli_query($conn, $sql);

		 echo "
		 <table class='table table-condensed'>
	 			<thead>
	 				<tr>
	 					<th>S.No.</th>
	 					<th>Type</th>
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
		 		<td>$rows[type]</td>
	 			<th><a href='edit_cakes.php?edit_id=$rows[type_id]' class='btn btn-primary'>Edit</button></a></th>
	 			<th><a href='edit_cakes.php?del_id=$rows[type_id]' class='btn btn-danger'>Delete</button></a></th>
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
	$del_sql = "DELETE FROM types WHERE type_id = '$_GET[del_id]' ";
	if(mysqli_query($conn, $del_sql)) { ?>
	<script>
	window.location="edit_cakes.php";
	</script>
	<?php } else { ?>
	<script>
	window.alert("Server Error. Retry");
	window.location="edit_cakes.php";
	</script>

	<?php }
}
?>
<!-- End of deleting course from Database -->

<!--form for editting -->
<?php 
	if (isset($_GET['edit_id']) ) { 
		$sql = "SELECT * FROM types WHERE type_id = '$_GET[edit_id]' ";
		$run = mysqli_query($conn, $sql);
		while( $rows= mysqli_fetch_assoc($run) ) {
			$type = $rows['type'];
		}
		?>
<div class="col-md-12">
		<div class="col-md-3">

		</div>
		<div class="col-md-6 well well-sm">
			<form method="post" class="form-group">
				<center><h3>EDIT TYPES OF CAKES</h3></center>
				<label>Type of Cake:</label>
				<input type="text" class="form-control" name="etype" value="<?php echo $type; ?>" required="yes">
				<br>
				<input type="hidden" value="<?php echo $_GET['edit_id'] ?>" name="edit_cakes_id"></p>
				<input type="submit" class="btn btn-success" value="Save" name="submit_edit">
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
if (isset($_POST['submit_edit'] ) ){
	
	$etype = mysqli_real_escape_string($conn,strip_tags($_POST['etype']));
	

	$edit_id = $_POST['edit_cakes_id']; //passes the course id

	$edit_sql = "UPDATE types SET type = '$etype' WHERE type_id ='$edit_id' ";
	 if(mysqli_query($conn,$edit_sql) ) { ?>
	 	<script>
	 	window.alert("You have succesfully Edited");
	 	window.location="edit_cakes.php";
	 	</script>
	 <?php } else { ?>
	 <script >
	 window.alert("Server Error. Retry");
	 window.location="edit_cakes.php";
	 </script>
	 <?php }
}

?>


<!-- End of editing data in a database -->




</div>

</html>