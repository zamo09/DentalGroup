<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$correo = $_POST['correo'];
$tel = $_POST['tel'];
$ocupacion = $_POST['ocupacion'];
$medico = $_POST['medico'];
include("conexion.php");
		$sql_prodcuto = "INSERT INTO Pacientes (nombre,edad,domicilio,correo,telefono,ocupacion,medicoreferido,activo) VALUES ('" . $nombre . "'," . $edad . ",'" . $domicilio . "','" . $correo . "','" . $tel . "','" . $ocupacion . "','" . $medico . "',1);";
		if ($result = $conexion->query($sql_prodcuto)){
			$conexion->close();
			echo "<script>
               			alert('Paciente Guardado con Exito');
						window.location= '../mod/dentalgroup.php'
    				</script>";
		}else{
			$conexion->close();
			echo "<script>
               			alert('Error al guardar el Paciente');
               			window.history.back();
    				</script>";
		}
	?>