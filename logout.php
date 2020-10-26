<?php
	require './include/common.php';
	
	// destroy the session if present
	
?>





<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lifestyle Store</title>
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
	<div class="alert alert-success">
		You have successfully logged out.Click<a href="index.php">here</a>to go back to index page.

	</div>
	</div>
<?php
include 'include/footer.php';
?>

</body>


</html>