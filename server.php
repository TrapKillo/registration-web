<?php

	session_start();

	$username = "";
	$email = "";
	$errors = array();

	//connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	//register
	if(isset($_POST['register'])) {

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);

		$sql_u = "SELECT * FROM users WHERE username='$username'";
  		$sql_e = "SELECT * FROM users WHERE email='$email'";
  		$res_u = mysqli_query($db, $sql_u);
  		$res_e = mysqli_query($db, $sql_e);

		//ensure that form fields are filled properly
		if(empty($username)) {
			array_push($errors, "Username is required!");
		} else
		if(empty($email)) {
			array_push($errors, "Email is required!");
		} else
		if(empty($password1)) {
			array_push($errors, "Password is required!");
		} else
		if(empty($password2)) {
			array_push($errors, "Please confirm the password!");
		} else
		if($password1 != $password2) {
			array_push($errors, "Password doesn't match!");
		} else
		if(strlen($password1) < 8) {
			array_push($errors, "Password need to be 8 character or longer!");
		} else
		if(strlen($username) < 5) {
			array_push($errors, "Username need to be 5 character or longer!");
		} else
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			array_push($errors, "Please enter a valid email!");
		} else
		//if there aren't any errors, save user to the database
		if (mysqli_num_rows($res_u) > 0) {
			array_push($errors, "Sorry... username already taken"); 	
		} else if(mysqli_num_rows($res_e) > 0) {
			array_push($errors, "Sorry... email already taken"); 	
		} else if(count($errors) == 0) {
			$options = [
				'cost' => 12,
			];
			$password = password_hash($password1, PASSWORD_BCRYPT, $options);
			$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in!";
			header('location: index.php'); //redirect to home
		}
	}

	//log in
	if(isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		//ensure that form fields are filled properly
		if(empty($username) && empty($password)) {
			array_push($errors, "Please put your username and password!");
		} else
		if(empty($username)) {
			array_push($errors, "Username is required!");
		} else
		if(empty($password)) {
			array_push($errors, "Password is required!");
		}

		if(count($errors) == 0) {
			$password = md5($password); //encrypt password
			$query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) == 1) {
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php'); //redirect to home page
			} else {
				array_push($errors, "Wrong username or password!");
			}

		}
	}

	//logout
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}

?>