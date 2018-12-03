<?php 
$id_paciente = $_POST['paciente'];
$localizacion = $_POST['localizacion'];
$inicio = $_POST['inicio'];
$intencidad = $_POST['intencidad'];
$estimulo = $_POST['estimulo'];
$cualestimulo = $_POST['cualestimulo'];
$percusion = $_POST['percusion'];
$fisura = $_POST['fisura'];
$rx = $_POST['rx'];
$diagnostico = $_POST['diagnostico'];
$plan = $_POST['plan'];
$pronostico = $_POST['pronostico'];
include("conexion.php");
	$sql_dolor = "INSERT INTO HistoriaDolor(id_paciente,localizacion,inicio,intensidad,estimulo,cual,percusion,fisura,rx,diagnostico,plan,pronostico) VALUES (". $id_paciente . ",'".$localizacion."','".$inicio."','".$intencidad."','".$estimulo."','".$cualestimulo."','".$percusion."','".$fisura."','".$rx."','".$diagnostico."','".$plan."','".$pronostico."');";
	if ($resultado = $conexion->query($sql_dolor)) {
		$conexion->close();
		echo "<script>
               			alert('Historia del dolor Guardada con Exito');
						window.location= '../mod/tablapacientes.php'
    				</script>";
		}else{
			$conexion->close();
			echo "<script>
               			alert('Error al guardar la Historia');               			
    				</script>";
    				echo $sql_dolor;
		}
	?>