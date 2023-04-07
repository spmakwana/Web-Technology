<?php
// Connection
// server, username, password, database name
$host = "localhost";
$username = "root";
$password = "";
$dbname = "studentdatabase";

// mysqli

$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_error)
{
die("Connection failed");
}

function InsertData($studentname, $enrolmentno, $address, $mobileno)
{
	global $conn;
	$query = "insert into student (studentname, enrolmentno, address, mobileno) values ('$studentname', '$enrolmentno', '$address', '$mobileno')";
	$conn->query($query);
}

function DeleteData($enrolmentno)
{
	global $conn;
	$query = "delete from student where enrolmentno = '$enrolmentno'";
	$conn->query($query);
}

function UpdateData($studentname, $enrolmentno, $address, $mobileno)
{
	global $conn;
	$query = "update student set studentname='$studentname', address='$address', mobileno='$mobileno' where enrolmentno = '$enrolmentno'";
	$conn->query($query);
}

function GetData()
{
	global $conn;
	$query = "select * from student order by enrolmentno";
	$result = $conn->query($query);
	return $result;
}

function GetDataByEnrolmentNo($enrolmentno)
{
	global $conn;
	$query = "select * from student where enrolmentno = '$enrolmentno'";
	$result = $conn->query($query);
	return $result;
}



?>