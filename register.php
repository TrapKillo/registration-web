<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
	</head>
<body>
	<center>
		<h2>Register</h2>
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<input type="text" name="username" placeholder="username" value="<?php echo $username; ?>" /><br style="line-height:25px;">
			<input type="text" name="email" placeholder="email" value="<?php echo $email; ?>"><br style="line-height:25px;">
			<input type="password" name="password1" placeholder="password"/><br style="line-height:25px;">
			<input type="password" name="password2" placeholder="confirm password"/><br style="line-height:25px;">
			<input type="submit" name="register" value="Register"/><p>Already have an account?
				<a style="color: black; text-decoration:none; a:visited { text-decoration: none; color:red; } a:hover { text-decoration: none; color:blue; } a:focus { text-decoration: none; color:yellow; } a:hover, a:active { text-decoration: none; color:black }" href="login.php">Login</a> </p>
		</form>
	</center>
</body>
</html>