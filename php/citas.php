<?php
header('Content-Type: application/json');


$accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
include ("conexion.php");
switch ($accion) {
	case 'agregar':
		$SentenciaSQL = "INSERT INTO Agenda(id_paciente,title,descripcion,start,end,color,textColor) VALUES (".$_POST['id_paciente'].",'".$_POST['title']."','".$_POST['descripcion']."','".$_POST['start']."','".$_POST['end']."','".$_POST['color']."','".$_POST['textColor']."')";
		$respuesta =  $conexion->query($SentenciaSQL);
		echo json_encode($respuesta);
		break;
	case 'modificar':

		break;
	case 'eliminar':
		$res = $conexion->query("SELECT id_agenda FROM Agenda WHERE id_paciente =".$_POST['id_paciente']." and start LIKE '%".$_POST['start']."%';");
		$f = $res->fetch_assoc();
		if (isset($f['id_agenda'])) {
			$eliminarSQL = "DELETE FROM Agenda WHERE id_agenda = " . $f['id_agenda'] . ";";
			$respuesta =  $conexion->query($eliminarSQL);
			echo json_encode($respuesta);
		}
		break;
	default:
		$SQL = "SELECT * FROM Agenda;";
		$selectCita = $conexion->query($SQL);
		while ($fila = $selectCita->fetch_assoc()){
			$rows[]=$fila;
		}
		echo json_encode($rows);
		break;
}	
?>