<?php

			include 'class/empleado.php';

			$NewEmpleado= new Empleado();
			$NewEmpleado->Borrar($_POST["sel"]);
?>