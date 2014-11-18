<?php
require_once(__DIR__ ."/../model/config.php");//changed to config file because of the new Database class

$connection = new mysqli($host, $username, $password);//creates the new connection w/ string variables

if($connection ->connect_error) {//if statement is checking if there was a connection error
	die("<p>Error: " . $connection->connect_error . "</p>");
}
else { 
echo "Success" . $connection->host_info;
}

$exists = $connection->select_db($database);//trys to access the database

if(!$exists) {// performs commands to exist if it doesn't exist
$query = $connection->query("CREATE DATABASE $database");// a string
// a statement to tells $database to create a database.
if($query) {//to output a string
	echo "<p>Successfully created database " . $database . "</p>";//paragraph tags to space out 
 }
}
else{// makes it execute the database to be completed
	echo "<p>Database Already Exists.</p>";
}//whole code only runs when the database exists

$query = $connection->query("CREATE TABLE posts ("//create a table in local 
	. "id int(11) NOT NULL AUTO_INCREMENT," //autoincrement is going to give it a name in localhost automaticlly
	. "title varchar(255) NOT NULL,"//the title 
	. "post text NOT NULL,"//posts the text on the website 
	. "PRIMARY KEY (id))");//the id in primary key 
if($query) {
	echo "<php>Successfully create table: posts</p>";//shows or echos the text on the website
}
else {
	echo "<p>$connection->error</p>";
}
$connection->close();//closes the connection or the rest of the code

?>