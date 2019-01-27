<?php 
$id_diagnostico = $_GET['id'];
$id_paciente = $_GET['paciente'];
include("conexion.php");
		$sql_prodcuto = "DELETE FROM Diagnostico WHERE id_diagnostico = " . $id_diagnostico . ";";
		if ($result = $conexion->query($sql_prodcuto)){
			$conexion->close();
			echo "<script>
               			alert('Diagnostico Eliminado con Exito');
						window.location= '../mod/diagnostico.php?id=".$id_paciente."'
    				</script>";
		}else{
			$conexion->close();
			echo "<script>
               			alert('Error al eliminar el diagnostico');
               			window.history.back();
    				</script>";
		}
	?>
 ?>