<!DOCTYPE html>
<html>
<head>
	<title>Historia Estomatologica</title>
	<link rel="shortcut icon" href="../img/iconos/icon.ico">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/formularios.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark fondonav"> 
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
    <div id="wrapper" class="">
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
            <div class="container containers">
			    <div class="row h-100 justify-content-md-center">
			        <div class="col-md-12 my-auto">	        	
						<div class="card">
			                <div class="card-body">
			                    <h3 class="text-center default-text py-3"><i class="fas fa-ambulance"></i> Historia Estomatologica</h3>
			                    <form action="../php/guardarestomalogica.php" method="post"> 
			                    	<div class="row justify-content-md-center">
			                    		<div class="md-form col-lg-6 col-md-12 col-sm-12">
						                    <?php
						                    	include "../php/conexion.php";					                    	
						                    	if (empty($_GET['id'])) {
						                    		$SQL = "SELECT nombre,id_paciente FROM Pacientes WHERE NOT id_paciente in (SELECT id_paciente FROM HistoriaEstomatologica) AND activo = 1;";
													$selectPacientes = $conexion->query($SQL);
													echo "<select name='paciente' class='form-control text-center'>";
													while ($fila = $selectPacientes->fetch_array()) {
														echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
													}
													echo "</select>";
						                    	}else{
						                    		$id_paciente = $_GET['id'];
													$SQL = "SELECT nombre FROM Pacientes WHERE id_paciente = " . $id_paciente . ";";
													$selectTable = $conexion->query($SQL);
													while ($fila = $selectTable->fetch_array()) {
														echo "	<input type='hidden' name='paciente' value='".$id_paciente."'required>";
														echo "<h2 class='text-center default-text py-3'>" . $fila[0] . "</h2>";
													}
												}
												$conexion->close();
											?>
										</div>
									</div>                   
				                    <div class="row">
				                        <div class="md-form col-lg-6 col-md-12 col-sm-12">
				                            <i class="fas fa-car-crash prefix grey-text"></i>
				                           	<input type="text" autocomplete="off" name="accidente" class="form-control" required>
				                            <label for="defaultForm-pass">&nbsp;&nbsp; Ha tenido algun accidente que ha afectado sus dientes?  </label>
				                        </div> 
				                        <div class="md-form col-lg-6 col-md-12 col-sm-12">
				                            <i class="fas fa-question prefix grey-text"></i>
				                            <input type="text" autocomplete="off" name="queaccidente" class="form-control" required>
				                            <label for="defaultForm-pass">&nbsp;&nbsp; Que accidente?</label>
				                        </div>				                         						                        					                    	
				                    </div>
				                    <div class="row">
				                    	<div class="md-form col-lg-4 col-md-12 col-sm-12">
				                            <i class="fas fa-tint prefix grey-text"></i>
				                           	<input type="text" autocomplete="off" name="encias" class="form-control" required>
				                            <label for="defaultForm-pass">&nbsp;&nbsp; Le sangran a menudo las encias? </label>
				                        </div>
				                        <div class="md-form col-lg-4 col-md-12 col-sm-12">
				                            <i class="fas fa-grimace prefix grey-text"></i>
				                           	<input type="text" autocomplete="off" name="cepilla" class="form-control" required>
				                            <label for="defaultForm-pass">&nbsp;&nbsp; Se cepilla los dientes?</label>
				                        </div> 
				                        <div class="md-form col-lg-4 col-md-12 col-sm-12">
				                            <i class="fas fa-hashtag prefix grey-text"></i>
				                            <input type="text" autocomplete="off" name="cuantas" class="form-control" required>
				                            <label for="defaultForm-pass">&nbsp;&nbsp; cuantas veces al dia?</label>
				                        </div> 				                        						                        					                    	
				                    </div>	
				                    <div class="row">
				                    	 <div class="md-form col-lg-4 col-md-12 col-sm-12">
				                            <i class="fas fa-wrench prefix grey-text"></i>
				                           	<input type="text" autocomplete="off" name="utiliza" class="form-control" required>
				                            <label for="defaultForm-pass">&nbsp;&nbsp; Que utiliza para cepillarse los dientes?</label>
				                        </div> 
				                        <div class="md-form col-lg-8 col-md-12 col-sm-12">
				                            <i class="fas fa-eye prefix grey-text"></i>
				                            <input type="text" autocomplete="off" name="visita" class="form-control" required>
				                            <label for="defaultForm-pass">&nbsp;&nbsp; Cuando fue su ultima visita al dentista?</label>
				                        </div>
				                    </div>			                 
				                    <div class="row justify-content-md-center">
				                    	<div class="col-lg-4 col-md-12 col-sm-12 text-right">
				                    		<button type="" class="btn btn-danger btn-lg btn-block"><i class="fas fa-times-circle "></i> Cancelar</button>
				                    	</div><br>
				                    	<div class="col-lg-4 col-md-12 col-sm-12 text-left">
				                    		<button type="submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-save"></i> Guardar</button><br><br>
				                    	</div>
				                    </div> 
				                    <br>              	
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>				
            </div>
        </div> <!-- /#page-content-wrapper -->
    </div> <!-- /#wrapper -->
        <!-- Bootstrap core JavaScript -->
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
        </script>
</body>
</html>