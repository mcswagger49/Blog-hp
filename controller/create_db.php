<?php
	require_once(__DIR__ . "/../model/config.php"); //changed to config file because of the new Database class

	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("//create a table in local 
		. "id int(11) NOT NULL AUTO_INCREMENT," //autoincrement is going to give it a name in localhost automaticlly
		. "title varchar(255) NOT NULL,"//the title 
		. "post text NOT NULL,"//posts the text on the website 
		. "PRIMARY KEY (id) )");//the id in primary key 
	if($query) {
		echo "<php>Successfully create table: posts</p>";//shows or echos the text on the website
}
	else {
		echo "<p>" . $_SESSION["connection"]->error. "</p>";
}