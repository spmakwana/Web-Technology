<?php
session_start();
if(isset($_POST["email"]))
{
	$emailid = $_POST["email"];
	$password = $_POST["Password"];
	// Validation
	require_once("../connection.php");

	$query = "select * from seller where emailid='$emailid' and password='$password'";

	try
	{
		$result = $con->query($query);
		if($data = $result->fetch_object())
		{
			$_SESSION["login"] = "seller";
			$_SESSION["username"] = $data->emailid;
			header("location: product.php");
		}
		else
		{
			echo 'Incorrect username or password. Please try again';
			echo '<a href="index.php">Click here to login again</a>';
		}
	}
	catch(Exception $e)
	{
		echo $e;
	}
}
?>