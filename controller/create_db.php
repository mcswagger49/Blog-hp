<?php
require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection ->connect_error) {
	die("Error: " . $connection->connect_error);
}
else { 
echo "Success" . $connection->host_info;
}

$exists = $connection->select_db($database);//trys to access the database

if(!$exists) {// performs commands to exist if it doesn't exist
$query = $connection->query("CREATE DATABASE $database");// a string
// a statement to tells $database to create a database.
if($query) {//to output a string
	echo "Successfully created database " . $database;
 }
}
else{// to execute the databse to be completed
	echo "Database already exists.";
}
//whole code only runs when the database exists


$connection->close();//closes the connection or the rest of the code

?>