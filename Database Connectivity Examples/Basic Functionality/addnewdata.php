<?php
	if(isset($_GET["enrolmentno"]))
	{
		require "functions.php";

		$enrolmentno = $_GET["enrolmentno"];
		$studentname = $_GET["studentname"];
		$address = $_GET["address"];
		$mobileno = $_GET["mobileno"];

		InsertData($studentname, $enrolmentno, $address, $mobileno);
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="addnewdata.php">
		Enrolmentno <input type="text" name="enrolmentno" id="enrolmentno"><br>
		studentname <input type="text" name="studentname" id="studentname"><br>
		address <input type="text" name="address" id="address"><br>
		mobileno <input type="text" name="mobileno" id="mobileno"><br>
		<input type="submit" value="Add data">
	</form>
</body>

</html>