<?php 
$id_paciente = $_POST['paciente'];
$accidente = $_POST['accidente'];
$queaccidente = $_POST['queaccidente'];
$encias = $_POST['encias'];
$cepilla = $_POST['cepilla'];
$cuantas = $_POST['cuantas'];
$utiliza = $_POST['utiliza'];
$visita = $_POST['visita'];
include("conexion.php");
	$sql_estomalogica = "INSERT INTO HistoriaEstomatologica(id_paciente,accidente,queaccidente,encias,dientes,cuantas,queutiliza,ultimavisita) VALUES (" . $id_paciente . ",'".$accidente."','".$queaccidente."','".$encias."','".$cepilla ."','".$cuantas."','".$utiliza."','".$cualalergico."','".$visita."');";
	if ($resultado = $conexion->query($sql_estomalogica)) {
		$conexion->close();
		echo "<script>
               			alert('Historia estomalogica Guardada con Exito');
						window.location= '../mod/tablapacientes.php'
    				</script>";
		}else{
			$conexion->close();
			echo "<script>
               			alert('Error al guardar la Historia');               			
    				</script>";
    				echo $sql_estomalogica;
		}
	?>