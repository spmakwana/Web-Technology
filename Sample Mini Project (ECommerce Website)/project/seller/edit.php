<?php
	session_start();
	require_once("../connection.php");
	$productname = "";
	$description = "";
	$price = "";
	$imagepath = "";
	$pid = $_GET["pid"];
	// $result = $con->query("select * from product where productid = '$pid'");
	// if($data = $result->fetch_object())
	// {
	// 	$productname = $data->productname;
	// 	$description = $data->description;
	// 	$price = $data->price;
	// 	$imagepath = $data->image;
	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>

	<form action="editsubmit.php" method="POST" enctype="multipart/form-data">
	<table class="registration-table">

	<tr>
		<td colspan="2">	<h1>Edit Product</h1></td>
	</tr>
	<tr>
		<td><label for="productname">Product name</label></td>
	<td><input type="text" name="productname" id="productname" value="<?= $productname ?>">
	<input type="hidden" name="pid" value="<?= $pid ?>">
</td>
	</tr>
	
	<tr>
		<td><label for="description">Description</label></td>
	<td><input type="text" name="description" id="description" value="<?= $description ?>"></td>
	</tr>

	<tr>
		<td><label for="price">Price</label></td>
	<td><input type="text" name="price" id="price" value="<?= $price ?>"></td>
	</tr>

	<tr>
		<td><label for="imagefile">Select Image</label></td>
	<td><input type="file" name="imagefile" id="imagefile"></td>
	</tr>
	<tr><td></td><td><input type="submit" value="Update Product Details"></td></tr>
	</table>
	</form>
</body>
</html>