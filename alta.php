<?php
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$dni=$_POST["dni"];
		$sueldo=$_POST["sueldo"];

			include 'class/empleado.php';

			$NewEmpleado= new Empleado();
			$NewEmpleado->Alta($nombre,$apellido,$dni,$sueldo);

		