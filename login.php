<?php
	require_once("login-session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<h1>Register</h1>
	<form method="POST" action="">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="login" value="Log In">
	</form>


	<h1>Sign Up</h1>
	<form method="POST" action="">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		Email Address: <input type="text" name="password"><br>
		<input type="submit" name="register" value="Sign Up">
	</form>

</body>
</html>


