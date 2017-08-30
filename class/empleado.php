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

	}

?>