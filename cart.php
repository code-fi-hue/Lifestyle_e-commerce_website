
  
<?php
    require './include/common.php';
    // check if logged in
    if(!isset($_SESSION["email_id"])){
        header("location: login.php");
    }
?>


<!DOCTYPE html>
<html>
<head>

	<title>Cart</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

<?php
	include 'include/header.php';
	 $user_id = $_SESSION["id"];
            $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                $total = 0;
	?>
<div class="container panel-margin">
	<table class="table table-hover">
		
		<tr>
			<th>Item Number</th>
			<th>Item Name</th>
			<th>Price</th>
			<th></th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)){ ?>
		<tr>
			<td><?php echo $row["id"] ?></td>
			<td><?php echo $row["name"] ?></td>

<td><?php $total += $row["price"]; echo $row["price"] ?></td>

<td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>

		</tr>
		<?php
                    }
                ?>
		<tr>
			<td></td>
			<td></td>
			<td>Total:<?php echo $total; ?></td>
			<td>Rs.0</td>
			<td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
		</tr>
	</table>
	</div>
<?php
}
include 'include/footer.php';
?>
</body>
</html>