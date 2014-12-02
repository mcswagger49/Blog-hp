<?php
//stores infomation 
	require_once(__DIR__ . "/Database.php");
	session_start();

  $path = "/Blog/";//a new path variable

	$host = "localhost";// the variable host
	$username = "root";//the variable username 
	$password = "root";//the variable password
	$database = "blog_db";//the variable database

	if(isset($_SESSION["connection"])) {//checks it the variable is set on not.
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connnection"] = $connection;//access the session vrible throughout all the webpages.
}