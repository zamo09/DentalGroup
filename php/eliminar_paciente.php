<?php 
$id_paciente = $_GET['id'];
include("conexion.php");
		$sql_prodcuto = "UPDATE Pacientes SET activo = 0 WHERE id_paciente = " . $id_paciente . ";";
		if ($result = $conexion->query($sql_prodcuto)){
			$conexion->close();
			echo "<script>
               			alert('Paciente Eliminado con Exito');
						window.location= '../mod/tablapacientes.php'
    				</script>";
		}else{
			$conexion->close();
			echo "<script>
               			alert('Error al eliminar el Paciente');
               			window.history.back();
    				</script>";
		}
	?>
 ?>