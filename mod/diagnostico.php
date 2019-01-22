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
	<?php include "../mod/menu.php" ?>
	<div class="container" >
	    <div class="row h-100">
	        <div class="col-sm-12 my-auto">
	        	<h1></h1>
				<div class="row justify-content-md-center">
					<h1>Diagnostico por diente</h1>
				</div>
				<div class="row justify-content-md-center">
<br>
				</div>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MS1</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup2" class="btn btn-primary">MS2</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MS3</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MS4</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
	        	</div><br>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
	        	</div><br>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
	        	</div><br>
	        	<div class="row justify-content-md-center">
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
					<div class="col-md-1 my-auto">
						<button id="btn-abrir-popup" class="btn btn-primary">MRB</button>
					</div>
	        	</div>
	        </div>
	    </div>
	</div>
	<?php 
			$SQL = "SELECT * FROM Pacientes WHERE activo = 1;";
			include "../php/conexion.php";
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
														<th class="text-center">Nombre</th>
														<th class="text-center">Correo</th>
														<th class="text-center">Telefono</th>							
														<th class="text-center">Historial</th>
														<th class="text-center">Accion</th>
													</tr>
												</thead>
											<?php
											while ($fila = $selectTable->fetch_row()){					
												echo '<tr>';											
													echo '<td>' . $fila[1] . '</td>';
													echo '<td ">' . $fila[4] . '</td>';
													echo '<td ">' . $fila[5] . '</td>';
													echo '<td class="text-center"> <a class="btn btn-primary btn-sm" href=historiamedica.php?id='. $fila[0] .'><span class="fas fa-stethoscope"></span></a> &nbsp; <a class="btn btn-info btn-sm" href=historiaestomatologica.php?id='. $fila[0] .'><span class="fas fa-ambulance"> </span></a> &nbsp; <a class="btn btn-warning btn-sm danger" href=historiadolor.php?id='. $fila[0] .'><span class="fas fa-exclamation-triangle "></span></a> </td>';
													echo '<td class="text-center"> <a class="btn btn-danger btn-sm" href=../php/eliminar_paciente.php?id='. $fila[0] .' onclick="return confirmar(\''. $fila[1] .'\');"><span class="fas fa-trash-alt "></span></a> <a class="btn btn-success btn-sm" href=php/eliminar_producto.php?id='. $fila[0] .'><span class="fas fa-user-edit "></span></a></td>';
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
			<form action="../php/guardardiagnostico.php">
				<textarea type="text" id="form10" class="md-textarea form-control" rows="4"></textarea>
				<br>
				<input type="submit" class="btn-submit" value="Suscribirse">
			</form>
		</div>
	</div>

<div class="overlay" id="overlay2">
			<div class="popup" id="popup2">
				<a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>zaMO</h3>
				<h4>y recibe un cupon de descuento.</h4>
				<form action="">
					<div class="contenedor-inputs">
						<input type="text" placeholder="Nombre">
						<input type="email" placeholder="Correo">
					</div>
					<input type="submit" class="btn-submit" value="Suscribirse">
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