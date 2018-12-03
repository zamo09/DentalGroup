<?php
		$conexion = new mysqli('162.241.2.34', 'dentalgr_zamo', '1614pendejos', 'dentalgr_dentalgroup');
		$conexion->set_charset("utf8");
		if (mysqli_connect_errno()) {
		    printf("Error de conexión: %s\n", mysqli_connect_error());
		    exit();
		} 
?>