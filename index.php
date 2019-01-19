<?php include('server.php');

	//if user doesn't have an account he can't access the home page
	if(empty($_SESSION['username'])) {
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>
<body>
	<center>
		<div>
			<?php if(isset($_SESSION['success'])): ?>
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			<?php endif ?>
			<?php if(isset($_SESSION['username'])): ?>
				<p>Welcome <?php echo $_SESSION['username']; ?></p>
				<br>
				<a href="index.php?logout='1'" type="submit" name="logout" value="Logout">Logout</a>
			<?php endif; ?>
		</div>
	</center>
</body>
</html>