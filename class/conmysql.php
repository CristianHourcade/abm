<?php 

class ConnectionMySQL{

private $host;
private $user;
private $password;
private $database;
private $conn;
 
public function __construct(){ 
//Constructor
include "includes/config-bd.php";

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
 return $result;

}

public function Selecc($sql){
	
	$result = $this->conn->query($sql);

	while($fila=mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td><input type="checkbox" class="tilde" value="<?php echo $fila["id"] ?>">
						<td><?php echo $fila["nombre"]?></td>
						<td><?php echo $fila["apellido"]?></td>
						<td><?php echo $fila["dni"]?></td>
						<td><?php echo $fila["sueldo"]?></td>
					</tr>
				<?php
				}

}


}

?>