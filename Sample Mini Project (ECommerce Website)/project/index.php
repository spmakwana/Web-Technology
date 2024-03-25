<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form action="loginsubmit.php" method="POST">
	<table class="registration-table">

	<tr>
		<td colspan="2">	<h1>Login</h1></td>
	</tr>
	<tr>
		<td><label for="email">Email</label></td>
	<td><input type="text" name="email" id="email"></td>
	</tr>
	
	<tr>
		<td><label for="Password">Password</label></td>
	<td><input type="text" name="Password" id="Password"></td>
	</tr>

	<tr><td></td><td><input type="submit" value="Login"></td></tr>
	</table>
	</form>
</body>
</html>