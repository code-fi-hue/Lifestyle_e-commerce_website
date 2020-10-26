
<?php
	require "./include/common.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
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
					<h3 class="panel-title">Login to make purchase
					</h3>
				</div>
				<form action="login_submit.php" method="POST">
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required pattern=".{6}">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		

			<div class="panel-footer">
				Don't have an account?<a href="signup.php">Register</a>
			</div>
		</div>


		<?php
include 'include/footer.php';
?>

</body>
</html>