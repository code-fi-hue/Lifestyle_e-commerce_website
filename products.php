
<?php
	require './include/common.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>My LifeStyle Store</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/index.css">
	
</head>
<body>

<?php
include 'include/header.php';
require './include/check-if-added.php';
?>
<div class="panel-margin">
			<div class="jumbotron">
				<center>
					<h1>Welcome to our lifestyle store!</h1>
					<p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
				</center>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/1.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Cannon EOS</h3>
							<p>Price:Rs.36000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/2.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Nikon DSLR</h3>
							<p>Price:Rs.40000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/3.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Sony DSLR</h3>
							<p>Price:Rs.45000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/4.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Olympus DSLR</h3>
							<p>Price:Rs.50000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>






				


			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/9.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Titan Model #301</h3>
							<p>Price:Rs.1300.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/11.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Titan Model #201</h3>
							<p>Price:Rs.3000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/10.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>HMT Milon</h3>
							<p>Price:Rs.8000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/12.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Faber Luba #111</h3>
							<p>Price:Rs.18000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>


		</div>
		<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/shirt.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>H&W</h3>
							<p>Price:Rs.800.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/13.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Luis Phil</h3>
							<p>Price:Rs.1000.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/6.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>John ZoK</h3>
							<p>Price:Rs.1500.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="img/14.jpg" height="200" width="200" alt="camera">
						<div class="caption">
							<h3>Jhalsani</h3>
							<p>Price:Rs.1300.00</p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		


            <?php
include 'include/footer.php';
?>

</body>
</html>