<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="styles.css"/>
		<script src="script.js"></script>
	</head>
<body>
	<div class="wrapper">
		<center>
			<form action="login.php" method="post" class="form">
				<h1>Login</h1>
				<?php include('errors.php'); ?>
				<input type="text" name="username" autocomplete="off" placeholder="username" /><br style="line-height:25px;">
				<input type="password" name="password" placeholder="password"/><br style="line-height:25px;">
					<input type="submit" onclick="animateLogin();" class="button" id='loginBTN' name="login" value="Login">
					<p>Don't have an account? <a href="register.php">Register</a> </p>
			</form>
		</center>
	</div>
</body>
</html>
