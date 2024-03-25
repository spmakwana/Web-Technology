<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		if(isset($_SESSION["login"]) && $_SESSION["login"] == "customer")
		{
			echo "</p>Welcome ".$_SESSION["username"]. " | <a href='logout.php'>Logout</a></p>";
		}
		else 
		{
			echo "<a href='index.php'>Login</a></p>";
		}
		require_once("connection.php");
		$result = $con->query("select * from product");
		echo "<div class='product-container'>";
		while($data = $result->fetch_object())
		{
			echo "<div class='product'>";
			echo "<img src='images/$data->image' class='product-image'>";
			echo "<p class='product-name'>$data->productname</p>";
			echo "<p class='product-description'>$data->description</p>";
			echo "<p class='product-price'>Price Rs. $data->price</p>";
			echo "<a href='addtocart.php?pid=$data->productid' class='add-to-cart-button'>Add to Cart</a>";
			echo "</div>";
		}
		echo "</div>";
	?>
</body>
</html>