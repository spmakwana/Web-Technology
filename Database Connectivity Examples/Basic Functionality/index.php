<?php
	require "functions.php";

	if(isset($_GET["deleteid"]))
	{
		DeleteData($_GET["deleteid"]);
	}

	$result = GetData();

	echo "<table border='1'>";
	echo "<tr><td>En no</td><td>Name</td><td>Address</td><td>Mobile</td><td></td></tr>";
	while($data = $result->fetch_object())
	{
	echo "<td>$data->enrolmentno</td><td>$data->studentname</td><td>$data->address</td><td>$data->mobileno</td>";
	echo "<td><a href='index.php?deleteid=$data->enrolmentno'>Delete</a></td>";
	echo "<td><a href='editdata.php?editid=$data->enrolmentno'>Edit</a></td>";
	echo "</tr>";
	}
	echo "</table>";
?>

<a href="addnewdata.php">Add New Student Record</a>