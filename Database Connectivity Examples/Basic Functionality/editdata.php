<?php
require "functions.php";
	if(isset($_GET["enrolmentno"]))
	{

		$enrolmentno = $_GET["enrolmentno"];
		$studentname = $_GET["studentname"];
		$address = $_GET["address"];
		$mobileno = $_GET["mobileno"];

		UpdateData($studentname, $enrolmentno, $address, $mobileno);
		header("location: index.php");
	}

	$result = GetDataByEnrolmentNo($_GET["editid"]);
	$data = $result->fetch_object();
	$enrolmentno = $data->enrolmentno;
	$studentname = $data->studentname;
	$mobileno = $data->mobileno;
	$address = $data->address;
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
	<form action="editdata.php">
		<input type="hidden" name="enrolmentno" id="enrolmentno" value="<?= $enrolmentno; ?>"><br>
		studentname <input type="text" name="studentname" id="studentname" value="<?= $studentname; ?>"><br>
		address <input type="text" name="address" id="address" value="<?= $address; ?>"><br>
		mobileno <input type="text" name="mobileno" id="mobileno" value="<?= $mobileno; ?>"><br>
		<input type="submit" value="Edit data">
	</form>
</body>

</html>