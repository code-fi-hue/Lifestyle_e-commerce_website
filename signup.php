<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My signup page</title>
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
					<h2 class="panel-title">SIGN UP
					</h2>
				</div>
				<form action="signup_script.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control"  name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control"  name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control"  name="password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<input type="contact" class="form-control" name="contact" placeholder="Contact" required>
					</div>
					<div class="form-group">
						<input type="city" class="form-control"  name="city" placeholder="City" required>
					</div>
					<div class="form-group">
						<input type="address" class="form-control" name="address" placeholder="Address" required>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="panel-footer">
					Already have an account?Click <a href="login.php">here</a> to create one.
				</div>
			
		</div>


		<?php
include 'include/footer.php';
?>

</body>
</html>