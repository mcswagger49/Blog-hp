<?php
//stores infomation 
	require_once(__DIR__ . "/Database.php");

  $path = "/Blog/";//a new path variable

$host = "localhost";// the variable host
$username = "root";//the variable username 
$password = "root";//the variable password
$database = "blog_db";//the variable database

$connection = new Database($host, $username, $password, $database);
?>