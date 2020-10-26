


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
	
	<header>

		<div class="header">
		<div class="inner-header">
			
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">

					
					<div class="logo"><a href="index.php" class="navbar-brand">LifestyleStore</a>
				</div>
			</div>
				<div class="header-link">
					<?php
					if(isset($_SESSION["email_id"])){ 
					?>
					<ul class="nav navbar-nav navbar-right">


 
 
					
						<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
					</ul>	
				</div>

				<div class="header-link">
				<ul class="nav navbar-nav navbar-right">
					
						<li><a href="logout.php"><i class="	fa fa-sign-out"></i> Logout</a></li>
					</ul>
			</div>
		</div>
		<div class="header-link">
			<ul class="nav navbar-nav navbar-right">
					
						<li><a href="settings.php"><i class="fa fa-user"></i>Settings</a></li>
					</ul>
					<?php
				}else{
			?>
			<ul class="nav navbar-nav navbar-right">
					
						<li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
					</ul>
						
				</div>
			</div>
				<div class="header-link">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="signup.php"><i class="fa fa-user"></i> SignUp</a></li>
					</ul>
					<?php
				}
				?>
				
		
				</div>

				
		</nav>
		
	</div>
</div>

</header>
</body>
</html>
