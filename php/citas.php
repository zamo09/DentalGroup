<?php
header('Content-Type: application/json');
include ("conexion.php");
		$SQL = "SELECT * FROM Agenda;";
		$selectCita = $conexion->query($SQL);

while ($fila = $selectCita->fetch_assoc()){
	$rows[]=$fila;
}
echo json_encode($rows);
?>