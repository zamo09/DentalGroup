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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>	
<?php require "navigationbar.php";
	$SQL = "SELECT * FROM Pacientes WHERE activo = 1;";
	include "../php/conexion.php";
		$selectTable = $conexion->query($SQL);
		$formulario = $_GET['frm'];
?>
<!-- Tabla de contenido -->
            <div id="page-content-wrapper">
                <div class="containers container">
					    <div class="row h-100 justify-content-md-center">
					        <div class="col-md-12 my-auto">	  
					        <div class="card">
					            <div class="card-body">
					            <h3 class="text-center default-text py-3"><i class="fas fa-users"></i> Selecciona un paciente para <?php echo $formulario; ?></h3>      	
								<div id="content">
									<div class="row">
										<div class="col-md-12">
											<input class="form-control" type="text" id="Buscador" onkeyup="myFunction()" placeholder="Buscar por nombre">
										</div>
									</div>
									<br>
									<table id="myTable" class="table table-striped">
										<thead class="thead-green">
											<tr>
												<th class="text-center">Nombre</th>
												<th class="text-center">Correo</th>
												<th class="text-center">Telefono</th>
												<th class="text-center">Seleccionar</th>
											</tr>
										</thead>
									<?php
									while ($fila = $selectTable->fetch_row()){					
										echo '<tr>';											
											echo '<td>' . $fila[1] . '</td>';
											echo '<td ">' . $fila[4] . '</td>';
											echo '<td ">' . $fila[5] . '</td>';										
											echo '<td class="text-center">  <a class="btn btn-success btn-sm" href='.$formulario.'.php?id='. $fila[0] .'><span class="fas fa-user-edit "></span></a></td>';
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
                </div>

            </div> <!-- /Tabla de contenido-->

</div>
<?php require "navigationfooter.php"; ?>
<script type="text/javascript">
	
	function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, j, visible;
  input = document.getElementById("Buscador");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // recorrer las filas que buscara apartir de la fila i
  for (i = 1; i < tr.length; i++) {
    visible = false;
    /* Obtenemos todas las celdas de la fila, no sólo la primera */
    td = tr[i].getElementsByTagName("td");
    for (j = 0; j < td.length; j++) {
      if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
        visible = true;
      }
    }
    if (visible === true) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}
</script>


</html>