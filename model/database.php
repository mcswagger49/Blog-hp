<?php //to create your own object to make variables and use function.  a Class is a blueprint for an object.
class Database {
private $connection;//private means that its only accesible in this file only
private $host; 
private $username;  
private $password; 
private $database; 

public function __construct($host, $username, $password, $database) {//the local infomation into the function taking the function 
      $this->host = $host;//"this" keyword
      $this->username = $username;
      $this->password = $password;
      $this->database = $database;//passing the infomation to the global info.

}
public function openConnection() {//opens the connection in my database
      $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

    if  ($this->$connection ->connect_error) {//if statement is checking if there was a connection error
	    die("<p>Error: " . $this->connection->connect_error . "</p>");
	}
}

public function closeConnection() {//closes the connection in my database 
	if(isset($this->connection)) {//it is checking the variables has its set or not 
	 $this->connection->close();//checking the closed connection

	}
}

public function query($string) {//calls the variable string into the query

}
}