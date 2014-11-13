<?php
require_once(__DIR__ ."/../model/database.php");//calling the database out of the folder

$connection = new mysqli($host, $username, $password, $database);//use the infomation to make a new mysqli allinment
 $title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);#filtering our input to the title
 $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);#filtering the input from post

 $query = $connection->query("INSERT INTO posts SET Title = '$title', post = '$post'");
 
 if ($query) {
    echo "<p>Successfully inserted post: $title</p>";//echos out the post onto the page
 } else {
 	echo "<p>connection->error</p>";//fixes the connection
 }
 
$connection->close();//closes the connection 