<?php
session_start();
if(isset($_GET["pid"]))
{
	$pid = $_GET["pid"];
	
	echo $query = "delete from product where productid = '$pid'";

	try
	{
		require_once("../connection.php");
		$con->query($query);
		$_SESSION["message"] = "Product is deleted Successfully";
		header("location: product.php");
	}
	catch(Exception $e)
	{
		echo "Some error occured. Please try again";
	}
}
?>