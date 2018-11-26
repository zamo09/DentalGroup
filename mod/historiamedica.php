<!DOCTYPE html>
<html>
<head>
	<title></title>
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
					                    <h3 class="text-center default-text py-3"><i class="fas fa-notes-medical "></i> Historia Medica</h3>
					                    <!--Body-->
					                    <form action="../php/guardarpaciente.php" method="post"> 
						                    <div class="row">
						                        <div class="md-form col-lg-8 col-md-12 col-sm-12">
						                            <i class="fas fa-id-card  prefix grey-text"></i>
						                            <input type="text" name="nombre" class="form-control" required>
						                            <select class="form-control">
						                            	<option>Si</option>
						                            	<option>No</option>
						                            </select>
						                            <label for="defaultForm-email">&nbsp;&nbsp; Nombre del paciente</label>
						                        </div> 
						                        <div class="md-form col-lg-4 col-md-12 col-sm-12">
						                            <i class="fas fa-birthday-cake  prefix grey-text"></i>
						                            <input type="text" name="edad" class="form-control" required>
						                            <label for="defaultForm-pass">&nbsp;&nbsp; Edad</label>
						                        </div>						                        					                    	
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