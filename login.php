<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
<body>
	<center>
		<h2>Login</h2>
		<form action="login.php" method="post">
			<?php include('errors.php'); ?>
			<input type="text" name="username" class="form__input" placeholder="username"/><br style="line-height:25px;">
			<input type="password" name="password" class="form__input" placeholder="password"/><br style="line-height:25px;">
			<button type="submit" class="btn" name="login">Login</button> <p>Don't have an account? <a style="color: black; text-decoration:none; a:visited { text-decoration: none; color:red; } a:hover { text-decoration: none; color:blue; } a:focus { text-decoration: none; color:yellow; } a:hover, a:active { text-decoration: none; color:black }" href="register.php">Register</a> </p>
		</form>
	</center>
</body>
</html>