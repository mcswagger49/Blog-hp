<?php
	  require_once(__DIR__ . "/../model/config.php");

	  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	  $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");//select the salt and password from the users table.

	  if ($query->num_rows == 1) {
	  	  $row = $query->fetch_array();	

	  	  if($row["password"] === crypt($password, $row["salt"])) {
	  	  	$_SESSION["authenticated"] = true;//authenticates the users
	  	  	echo "<p>Login Successful!</p>";//Logged in correctly
	  	  }
	      else {
	  	  	echo "<p>Invalid username and password</p>";//tells the user whats wrong but not actually teling them ;D
		 }
	}
	 	  else {
	 		echo "<p>Invalid username and password</p>";
	 	 }
 
