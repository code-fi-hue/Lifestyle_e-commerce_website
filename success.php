
<?php
    require './include/common.php';
    // check if signed in
    if(!isset($_SESSION["email_id"])){
        header("location: index.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
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
 $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $query);
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($conn, $query1);
            }
?>
<div class="container panel-margin">
	<div class="alert alert-success">
		Your order is confirmed. Thankyou for shopping with us.
		<a href="products.php">Click Here</a>to purchase any other item.
	</div>
	</div>

<?php
include 'include/footer.php';
?>
</body>
</html>