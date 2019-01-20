<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="styles.css"/>
		<script src="script.js"></script>
	</head>
<body>
	<div class="wrapper">
		<center>
			<form method="post" action="register.php" class="form">
				<h1>Register</h1>
				<?php include('errors.php'); ?>
				<input type="text" name="username" autocomplete="off" placeholder="username" value="<?php echo $username; ?>" /><br style="line-height:25px;">
				<input type="text" name="email" autocomplete="off" placeholder="email" value="<?php echo $email; ?>"><br style="line-height:25px;">
				<input type="password" name="password1" placeholder="password"/><br style="line-height:25px;">
				<input type="password" name="password2" placeholder="confirm password"/><br style="line-height:25px;">
				<input type="submit" onclick="animateRegister();" class="button" id='registerBTN' name="register" value="Register">
				<p> Already have an account? <a href="login.php">Login</a> </p>
			</form>
		</center>
	</div>
</body>
</html>
