<!DOCTYPE html>
<html>
<head>
	<title>Diagnostico</title>
	<link rel="shortcut icon" href="../img/iconos/icon.ico">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/dental.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<?php 
		include "../mod/menu.php";
		include ("../php/conexion.php");
		$id_paciente = $_GET['id'];
		$SQL = "SELECT nombre FROM Pacientes WHERE id_paciente = " . $id_paciente . ";";
		$selectTable = $conexion->query($SQL);												
	 ?>
	<div class="container" >
	    <div class="row h-100">
	        <div class="col-sm-12 my-auto">
	        	<h1></h1>
				<div class="row justify-content-md-center">
					<?php 
						while ($fila = $selectTable->fetch_array()) {
							echo "<h1 class='text-center default-text py-3'>Diagnostico de " . $fila[0] . "</h1>";
						}
					?>
				</div>
				<div class="row justify-content-md-center">
				<br>
				</div>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="MS1" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MS1</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS2" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MS2</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS3" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MS3</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MS4</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
	        	</div><br>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
	        	</div><br>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
	        	</div><br>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="MS" class="btn btn-primary"><span class="fas fa-tooth"></span></a> MRB</button>
					</div>
	        	</div>
	        </div>
	    </div>
	</div>
	<?php 
			$SQL = "SELECT D.id_diagnostico, P.nombre, D.clave, D.descripcion FROM Pacientes P, Diagnostico D WHERE P.id_paciente = D.id_paciente AND D.id_paciente = ".$id_paciente.";";
			$selectTable = $conexion->query($SQL);
		?>
		<div class="container" style="margin-top: 3em;">
		<div class="row h-100">
	        <div class="col-sm-12 my-auto">
	        	<h1></h1>
				<div class="row justify-content-md-center">
					<h1>Diagnostico por diente</h1>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-md-12 my-auto">
			<table id="myTable" class="table table-striped">
												<thead class="thead-green">
													<tr>
														<th class="text-center">Diente</th>
														<th class="text-center">Diagnostico</th>
														<th class="text-center">Accion</th>	
													</tr>
												</thead>
											<?php
											while ($fila = $selectTable->fetch_row()){	
												switch ($fila[2]) {
												    case "MS1":
												        echo "<script language='javascript'> document.getElementById('MS1').className = 'btn btn-danger'; </script>";
												        break;
												    case "MS2":
												        echo "<script language='javascript'> document.getElementById('MS2').className = 'btn btn-danger'; </script>";
												        break;
												    case "MS3":
												        echo "<script language='javascript'> document.getElementById('MS3').className = 'btn btn-danger'; </script>";
												        break;
												}				
												echo '<tr>';						
													echo '<td ">' . $fila[2] . '</td>';
													echo '<td ">' . $fila[3] . '</td>';
													echo '<td class="text-center"> <a class="btn btn-danger btn-sm" href=../php/eliminar_diagnostico.php?id='. $fila[0] .'&paciente='.$id_paciente.'><span class="fas fa-trash-alt"></span></a> </td>';
												echo '</tr>';
											}
											$selectTable->close();
											$conexion->close();
											?>
											</table>
										</div>
										</div>
										</div>
										</div>
		</div>
	<!-- Ventana emergente -->
	<div class="overlay" id="overlay">
		<div class="popup" id="popup">
			<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			<h3>Diagnostico de MS1</h3>
			<h4>Registre su diagnostico sobre el diente:</h4>
			<form action="../php/guardardiagnostico.php" method="POST">
				<div class="contenedor-inputs">
					<input type="hidden" name="id" value="<?php echo $id_paciente;?>">
					<input type="hidden" name="Diente" value="MS1">
					<textarea type="text" name="Diagnostico" style="text-align:center" class="md-textarea form-control" rows="4" placeholder="Escribe el diagnostico del diente"></textarea>
					<br>
				</div>				
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</div>
	</div>

	<div class="overlay" id="overlay2">
		<div class="popup" id="popup2">
			<a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			<h3>Diagnostico de MS2</h3>
			<h4>Registre su diagnostico sobre el diente:</h4>
			<form action="../php/guardardiagnostico.php" method="POST">
				<div class="contenedor-inputs">
					<input type="hidden" name="id" value="<?php echo $id_paciente;?>">
					<input type="hidden" name="Diente" value="MS2">
					<textarea type="text" name="Diagnostico" style="text-align:center" class="md-textarea form-control" rows="4" placeholder="Escribe el diagnostico del diente"></textarea>
					<br>
				</div>				
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</div>
	</div>

	<div class="overlay" id="overlay3">
		<div class="popup" id="popup3">
			<a href="#" id="btn-cerrar-popup3" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			<h3>Diagnostico de MS3</h3>
			<h4>Registre su diagnostico sobre el diente:</h4>
			<form action="../php/guardardiagnostico.php" method="POST">
				<div class="contenedor-inputs">
					<input type="hidden" name="id" value="<?php echo $id_paciente;?>">
					<input type="hidden" name="Diente" value="MS3">
					<textarea type="text" name="Diagnostico" style="text-align:center" class="md-textarea form-control" rows="4" placeholder="Escribe el diagnostico del diente"></textarea>
					<br>
				</div>				
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</div>
	</div>

	<!-- Bootstrap core JavaScript -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.bundle.js"></script>
	<script src="../js/mdb.min.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
	<script type="text/javascript" src="../js/popup.js"></script>
</body>
</html>