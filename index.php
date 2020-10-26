<?php
if (isset($_SESSION['email_id'])) {
  header('location: products.php');
}
require "./include/common.php";
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
	

	
	<header>
		<div class="header">
		<div class="inner-header">
			
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					
					<div class="logo"><a href="#" class="navbar-brand">LifestyleStore</a>
				</div>
			</div>
				<div class="header-link">
					<ul class="nav navbar-nav navbar-right">
					
						<li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
					</ul>
						
				</div>
			</div>
				<div class="header-link">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="signup.php"><i class="fa fa-user"></i> SignUp</a></li>
					</ul>
				</div>
			

			</div>
		</nav>
	</div>
</div>

		


</header>

<div class="content">
	<div class="banner-image">
		<div class="inner-banner-image">
			<center>
			<div class="banner-content">
				<h1>We sell lifestyle.</h1>
				<p>Flat 40% OFF on premium bands</p>
				<center>
					<a href="products.php"><button class="btn btn-danger btn-lg active" type="ShopNow">ShopNow</button>
				</center></a>
			
			</div>
		</center>
		</div>
	</div>
</div>
	<div class="container">
		<div class="items">
			<a href="products.php#cameras">
		<img src="img/camera.jpg" alt="" class="thumbnail" >
		<div class="caption">
		<h2>Cameras</h2>
		<p>Choose among the best available in the world.</p>
	</div>
</a>
</div>
<div class="items">
<a href="products.php#shirts">
		<img src="img/shirt.jpg" alt="" class="thumbnail" >
		<div class="caption">
			<h2>Shirts</h2>
			<p>Our exquisite collection of shirts.</p>
		</div>
	</a>
</div>
<div class="items">
	<a href="products.php#watches">
		<img src="img/watch.jpg" alt="" class="thumbnail">
		<div class="caption">
			<h2>Watch</h2>
			<p>Original watches from the best brands.</p>
	</div>
</a>
</div>


	</div>
</div>
<?php
include 'include/footer.php';
?>

</body>


</html>