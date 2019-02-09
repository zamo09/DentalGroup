<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>Selecciona el Paciente</title>
	<link rel="shortcut icon" href="../img/iconos/icon.ico">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/tablas.css">
	<link rel="stylesheet" type="text/css" href="../css/formularios.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/maintable.css">
</head>
<body>	
	<?php require "navigationbar.php";
	include ("../php/conexion.php");
	$id_paciente = $_GET['id'];
	$SQL = "SELECT nombre FROM Pacientes WHERE id_paciente = " . $id_paciente . ";";
	$selectTable = $conexion->query($SQL);
	?>
	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="container containers">
			<div class="row h-100 justify-content-md-center">
				<div class="col-md-12 my-auto">	        	
					<div class="card">
						<div class="card-body">
							<div class="row justify-content-md-center">
								<?php 
								while ($fila = $selectTable->fetch_array()) {
									echo "<h3 class='text-center default-text py-3'><i class='far fa-money-bill-alt'></i> Pago de " . $fila[0] . " <i class='far fa-money-bill-alt'></i></h3>";
								}
								?>
							</div>
							<!--Body-->
							<form action="../php/guardarpaciente.php" method="post"> 
								<div class="row">
									<div class="md-form col-lg-8 col-md-12 col-sm-12">
										<i class="fas fa-id-card  prefix grey-text"></i>
										<input type="text" name="nombre" class="form-control" required>
										<label for="defaultForm-email">&nbsp;&nbsp; Nombre del paciente</label>
									</div> 
									<div class="md-form col-lg-4 col-md-12 col-sm-12">
										<i class="fas fa-birthday-cake  prefix grey-text"></i>
										<input type="text" name="edad" class="form-control" required>
										<label for="defaultForm-pass">&nbsp;&nbsp; Edad</label>
									</div>						                        					                    	
								</div> 					
								<div class="row justify-content-md-center">
									<div class="col-lg-4 col-md-12 col-sm-12 text-right">
										<button type="" class="btn btn-danger btn-lg btn-block"><i class="fas fa-times-circle "></i> Cancelar</button>
									</div><br>
									<div class="col-lg-4 col-md-12 col-sm-12 text-left">
										<button type="submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-save"></i> Guardar</button>
									</div>
								</div> 
								<br>              	
							</form>
						</div>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Order ID</th>
								<th class="column3">Name</th>
								<th class="column4">Price</th>
								<th class="column5">Quantity</th>
								<th class="column6">Total</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">2017-09-29 01:22</td>
									<td class="column2">200398</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-28 05:57</td>
									<td class="column2">200397</td>
									<td class="column3">Samsung S8 Black</td>
									<td class="column4">$756.00</td>
									<td class="column5">1</td>
									<td class="column6">$756.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-26 05:57</td>
									<td class="column2">200396</td>
									<td class="column3">Game Console Controller</td>
									<td class="column4">$22.00</td>
									<td class="column5">2</td>
									<td class="column6">$44.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-25 23:06</td>
									<td class="column2">200392</td>
									<td class="column3">USB 3.0 Cable</td>
									<td class="column4">$10.00</td>
									<td class="column5">3</td>
									<td class="column6">$30.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-24 05:57</td>
									<td class="column2">200391</td>
									<td class="column3">Smartwatch 4.0 LTE Wifi</td>
									<td class="column4">$199.00</td>
									<td class="column5">6</td>
									<td class="column6">$1494.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-23 05:57</td>
									<td class="column2">200390</td>
									<td class="column3">Camera C430W 4k</td>
									<td class="column4">$699.00</td>
									<td class="column5">1</td>
									<td class="column6">$699.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-22 05:57</td>
									<td class="column2">200389</td>
									<td class="column3">Macbook Pro Retina 2017</td>
									<td class="column4">$2199.00</td>
									<td class="column5">1</td>
									<td class="column6">$2199.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-21 05:57</td>
									<td class="column2">200388</td>
									<td class="column3">Game Console Controller</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-19 05:57</td>
									<td class="column2">200387</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-18 05:57</td>
									<td class="column2">200386</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-22 05:57</td>
									<td class="column2">200389</td>
									<td class="column3">Macbook Pro Retina 2017</td>
									<td class="column4">$2199.00</td>
									<td class="column5">1</td>
									<td class="column6">$2199.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-21 05:57</td>
									<td class="column2">200388</td>
									<td class="column3">Game Console Controller</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-19 05:57</td>
									<td class="column2">200387</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-18 05:57</td>
									<td class="column2">200386</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


					</div>
				</div>
			</div>

		</div>
	</div> <!-- /#page-content-wrapper -->

	<?php require "navigationfooter.php"; ?>
</body>
</html>