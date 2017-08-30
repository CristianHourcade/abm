<?php 

class ConnectionMySQL{

private $host;
private $user;
private $password;
private $database;
private $conn;
 
public function __construct(){ 
//Constructor
include "../abm/includes/config-bd.php";

$this->host=HOST;
$this->user=USER;
$this->password=PASSWORD;
$this->database=DATABASE;
  
}
  
public function CreateConnection(){

$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);

}
  
public function CloseConnection(){

 $this->conn->close();
}
  
public function ExecuteQuery($sql){

 $result = $this->conn->query($sql);


}
  
}

?>