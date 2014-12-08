<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_STRING);//ANYTHING THATS NOT STRING IS NOT IMPLEMENTED
	$password = filter_input(INPUT_POST, "password",  FILTER_SANITIZE_STRING);

	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";//the salt for my password

	$hashedPassword = crypt($password, $salt);

	$query = $_SESSION["connection"]->query("INSERT INTO users SET "//the encrypted password and stored in the database
			. "email = '$email',"//email value
			. "username = 'username',"//username value
			. "password = '$hashedPassword',"//password value
			. "salt = '$salt'");
	if ($query) {
		echo "Sucessfully created users: $username";
	}
	 else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	






