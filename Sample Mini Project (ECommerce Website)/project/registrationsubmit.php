<?php
if(isset($_POST["email"]))
{
	$emailid = $_POST["email"];
	$name = $_POST["Name"];
	$password = $_POST["Password"];
	$gander = $_POST["Gender"];
	$city = $_POST["City"];
	$class = $_POST["Class"];
	$stream = $_POST["Stream"];
	// Validation
	require_once("connection.php");

	$query = "insert into registration (emailid, name, password, gander, city, class, stream) values ('$emailid', '$name', '$password', '$gander', '$city', '$class', '$stream')";

	try
	{
		$con->query($query);
		echo "Registration is Successful";
		echo "<br><a href='login.php'>Click here to login</a>";
	}
	catch(Exception $e)
	{
		echo "Duplicate username";
	}
}
?>