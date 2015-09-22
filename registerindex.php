<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Register</title>
		<link rel="stylesheet" href="css/loginstyle.css">
	</head>
	<body>
		<div class="login-card">
			<h1>New User</h1>
			<br>
			<form action="register.php" method="post">
				<input type="text" name="newuser" placeholder="Username">
				<input type="password" name="newpass" placeholder="Password">
				<input type="submit" name="login" class="login login-submit" value="Register">
			</form>
			<div class="login-help">
			<?php if(isset($_COOKIE["newuser"]))
			{
				setcookie ("newuser", "", time() - 3600);
				//If user and pass is taken display message
				echo("Username and password is taken! "); 
			}?>
			</div>
		</div>
	</body>
</html>