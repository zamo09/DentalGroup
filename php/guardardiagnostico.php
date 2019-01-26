<?php
$id_paciente = $_POST['id'];
$diagnostico = $_POST['Diagnostico'];
$diente = $_POST['Diente'];
include ("conexion.php");
$sql_diagnostico = "INSERT INTO Diagnostico (id_paciente, clave, descripcion) VALUES (".$id_paciente.",'".$diente."','".$diagnostico."');";
if ($resultado = $conexion->query($sql_diagnostico)) {
	$conexion->close();
	echo "<script>
			 window.location= '../mod/diagnostico.php?id=".$id_paciente."'
   		</script>";
}else{
	$conexion->close();
	echo "<script>
    	alert('Error al guardar la Historia');               			
    </script>";
    echo $sql_estomalogica;
}
?>