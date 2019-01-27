<!DOCTYPE html>
<html>
<head>
<title>Eliminar Diagnostico</title>
<script type="text/javascript" src="../js/sweetalert.min.js"></script>
</head>
<body>
<?php 
$id_diagnostico = $_GET['id'];
$id_paciente = $_GET['paciente'];
$diente = $_GET['diente'];
include("conexion.php");
		$sql_prodcuto = "DELETE FROM Diagnostico WHERE id_diagnostico = " . $id_diagnostico . ";";
		if ($result = $conexion->query($sql_prodcuto)){
			$conexion->close();
			echo "<script>
               			swal('Diagnostico Eliminado', 'Diagnostico eliminado correctamente sobre el diente ".$diente."', 'success');
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