<?php
		$conexion = new mysqli('localhost', 'zamo', '1614zamo', 'dentalgroup');
		$conexion->set_charset("utf8");
		if (mysqli_connect_errno()) {
		    printf("Error de conexión: %s\n", mysqli_connect_error());
		    exit();
		} 
?>

