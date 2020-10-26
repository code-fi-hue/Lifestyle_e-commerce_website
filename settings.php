
<?php
	require './include/common.php';
	// check  if logged in
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php
include 'include/header.php';
?>

<div class="container panel-margin">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Change Password
					</h3>
				</div>
				<form action="settings_script.php" method="POST">
					<div class="form-group">
						<input type="password" class="form-control" name="old_password" placeholder="Old Password" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control"  name="new_password" placeholder="New Password" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control"  name="retype_new_password" placeholder="Retype New Password" required>
					</div>

					<button type="submit" class="btn btn-primary"><a href="products.php"> Change</a></button>
				</form>
			</div>
		

			
		</div>


<?php
include 'include/footer.php';
?>

</body>
</html>