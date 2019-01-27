<!DOCTYPE html PUBLIC>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Lista de pacientes</title>
    <link rel="shortcut icon" href="../img/iconos/icon.ico">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/tablas.css">
	<link rel="stylesheet" type="text/css" href="../css/formularios.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	</head>
	<body>
		<?php 
			$SQL = "SELECT * FROM Pacientes WHERE activo = 1 ORDER BY nombre;";
			include "../php/conexion.php";
			$selectTable = $conexion->query($SQL);
		?>
		<nav class="navbar fixed-top navbar-expand navbar-dark fondonav "> 

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"> <a class="nav-link" href="dentalgroup.php"><span class="fas fa-home"></span> Home </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                </ul>
                <form class="form-inline my-2 my-md-0"> </form>
            </div>
            <a href="#menu-toggle" id="menu-toggle" class="navbar-brand botonmenu"><span class="fas fa-tooth"></span></a> 
        	<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </nav>
        <div id="wrapper" class="navmargen">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="#"><span class="fas fa-tooth"></span> Dental Group </a> </li>
                    <li> <a href="#">Dashboard</a> </li>
                    <li> <a href="#">Shortcuts</a> </li>
                    <li> <a href="#">Overview</a> </li>
                    <li> <a href="#">Events</a> </li>
                    <li> <a href="#">About</a> </li>
                    <li> <a href="#">Services</a> </li>
                    <li> <a href="#">Contact</a> </li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="containers container">
					    <div class="row h-100 justify-content-md-center">
					        <div class="col-md-12 my-auto">	  
					        <div class="card">
					            <div class="card-body">
					            <h3 class="text-center default-text py-3"><i class="fas fa-users"></i> Tabla de pacientes</h3>      	
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
									<a class="btn btn-success" href=javascript:window.print();>Imprimir</a>
									<input class="btn btn-info" name="Restablecer" type="reset" value="Atras" onClick="history.back()">
								</div>	
					        </div>
					    </div>
					</div>
				</div>
                </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->
<?php include("../mod/footer.php") ?>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/mdb.min.js"></script>
<script>
	 $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, j, visible;
  input = document.getElementById("Buscador");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // recorrer las filas que buscara apartir de la fila i
  for (i = 0; i < tr.length; i++) {
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

function confirmar(paciente)
{
  if(confirm("Desea Eliminar el paciente: " + paciente + "?"))
    return true;
  else
    return false;
}
 
</script>


	</body>
</html>