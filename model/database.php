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
public function openConnection() {//opens the connection variables

}

public function closeConnection() {//closes the connection variables

}

public function query($string) {//calls the variable string into the query

}
}