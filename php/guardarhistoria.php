<?php 
$id_paciente = $_POST['paciente'];
$salud = $_POST['salud'];
$tratamiento = $_POST['tratamiento'];
$coagulacion = $_POST['coagulacion'];
$toma = $_POST['toma'];
$cualtoma = $_POST['cualtoma'];
$alergico = $_POST['alergico'];
$cualalergico = $_POST['cualalergico'];
$transtorno = $_POST['transtorno'];
$enfermedad = $_POST['enfermedad'];
$desmayo = $_POST['desmayo'];
$anestecia = $_POST['anestecia'];
$experiencia = $_POST['experiencia'];
include("conexion.php");
	$sql_historia = "INSERT INTO HistoriaMedica(id_paciente,estado,tratamiento,coagulacion,tomamedicamento,cualmeditoma,alergicomedi,cualalergico,transtorno,enfermedad,desmayo,anestesia,experiencia) VALUES (" . $id_paciente . ",'".$salud."','".$tratamiento."','".$coagulacion."','".$toma."','".$cualtoma."','".$alergico."','".$cualalergico."','".$transtorno."','".$enfermedad."','".$desmayo."','".$anestecia."','".$experiencia."');";
	if ($resultado = $conexion->query($sql_historia)) {
		$conexion->close();
		echo "<script>
               			alert('Historia medica Guardada con Exito');
						window.location= '../mod/tablapacientes.php'
    				</script>";
		}else{
			$conexion->close();
			echo "<script>
               			alert('Error al guardar la Historia');
               			
    				</script>";
    				echo $sql_historia;
		}
	?>