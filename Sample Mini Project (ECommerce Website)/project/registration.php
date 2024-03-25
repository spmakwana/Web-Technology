<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form action="registrationsubmit.php" method="POST">
	<table class="registration-table">

	<tr>
		<td colspan="2">	<h1>Registration</h1></td>
	</tr>
	<tr>
		<td><label for="email">Email</label></td>
	<td><input type="text" name="email" id="email"></td>
	</tr>
	
	<tr>
		<td><label for="Name">Name</label></td>
	<td><input type="text" name="Name" id="Name"></td>
	</tr>

	<tr>
		<td><label for="Password">Password</label></td>
	<td><input type="text" name="Password" id="Password"></td>
	</tr>

	<tr>
		<td><label for="cpassword">Confirm Password</label></td>
	<td><input type="text" name="cpassword" id="cpassword"></td>
	</tr>
	<tr>
		<td><label for="Gender">Gender</label></td>
		<td><input type="radio" name="Gender" id="male" value="0"><label for="male">Male</label>
		<input type="radio" name="Gender" id="female" value="1"><label for="female">Female</label><br>
	</td>
	</tr>

	<tr>
		<td><label for="City">City</label></td>
	<td><input type="text" name="City" id="City"></td>
	</tr>

	<tr>
		<td><label for="Class">Class</label></td>
	<td><input type="text" name="Class" id="Class"></td>
	</tr>

	<tr>
		<td><label for="Stream">Stream</label></td>
	<td><input type="text" name="Stream" id="Stream"></td>
	</tr>

	<tr><td></td><td><input type="submit" value="Signup"></td></tr>
	</table>
	</form>
</body>
</html>