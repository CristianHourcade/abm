<?php
include 'conmysql.php';

	class Empleado{
		
		public function Alta($nombre,$apellido,$dni,$sueldo){

			$sql="INSERT INTO empleados (nombre,apellido,dni,sueldo,status) VALUES ('".$nombre."','".$apellido."','".$dni."','".$sueldo."',1)";

			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->ExecuteQuery($sql);
			$con->CloseConnection();
		}

		public function Select(){

			$sql="SELECT * FROM empleados WHERE status=1";

			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->Selecc($sql);

		}
		
		public function Borrar($sel){

			$con = new ConnectionMySQL();

			$seleccion = explode("|",$sel);

			for($x=0;$x<=count($seleccion);$x++){

				$sql="UPDATE empleados SET status=0 WHERE id=$seleccion[$x]"; 

				$con->CreateConnection();
				$con->ExecuteQuery($sql);

			}

			$con->CloseConnection();
		}

	}
	
?>