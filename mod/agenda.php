<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda Dental Group</title>
	
	<link rel='stylesheet' type="text/css" href='../css/fullcalendar.css' />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="shortcut icon" href="../img/iconos/icon.ico">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/dental.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src='../js/jquery.min-calendar.js'></script>
	<script src='../js/moment.min.js'></script>
	<script src='../js/fullcalendar.js'></script>
	<script src="../js/es.js"></script>
	<link rel="stylesheet" href="../css/bootstrap-chosen.css" />
</head>
<body>
	<?php include "menu.php";
	include ("../php/conexion.php");
	$SQL = "SELECT nombre,id_paciente FROM Pacientes WHERE activo = 1;";?>
	<br>

	<div class="container">
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col-8">
				<div id="CalendarioWeb"></div>
			</div>
			<div class="col">
				
			</div>			
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="EventoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
	    		<div class="modal-header">
			        <h5 class="modal-title" id="tituloEvento">Agenda una Cita</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">&times;</span>
			    	</button>
			    </div>
			    <div class="modal-body">
					<label>Selecciona un paciente</label>
					<?php $selectPacientes = $conexion->query($SQL);?>
					<select name="paciente" id="pacientesS" data-placeholder="Seleciona un paciente..." class="chosen-select" required>
						<option value=""></option>
						<?php while ($fila = $selectPacientes->fetch_array()) {
						echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
						} ?>
					</select><br>
					<label>Fecha</label>
					<input type="text" name="fecha" id="txtFecha"><br>
					<label>Titulo</label>
					<input type="text" name="titulo" id="txtTitulo"><br>
					<label>Hora</label>
					<input type="text" name="hora" id="txtHora">	<br>   
					<label>Descripcion</label>   			
					<textarea id="txtDescripcion" rows="3"></textarea><br>
					<label>Color</label>
					<input type="color" value="#ff0000" id="txtColor" name="">
				</div>		    	
		      	<div class="modal-footer">
			      	<button type="button" id="btnGuardar" class="btn btn-success">Guardar</button>
			      	<button type="button" class="btn btn-primary">Modificar</button>
			        <button type="button" class="btn btn-danger" >Borrar</button>
		      	</div>
	      	</div>
    	</div>
  	</div>

  	<!-- Modal -->


<script src="../js/chosen.jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.bundle.js"></script>
	<script src="../js/mdb.min.js"></script>
	<script src="../js/menu.js"></script>
	<script src="../js/popup.js"></script>
	
	<script>
		  $(function() {
	        $('.chosen-select').chosen();
	        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
	      });
	$(document).ready(function(){
			$('#CalendarioWeb').fullCalendar({
				header:{
					left: 'prev,next today myCustomButton',
				    center: 'title',
				    right: 'month,agendaWeek,agendaDay'
				},
			dayClick:function(date,jsEvent,view){
				$("#EventoModal").modal();
				$('#EventoModal').on('shown.bs.modal', function () {
				  $('.chosen-select', this).chosen('destroy').chosen();
				});
				$("#pacientesS").val([]);
				document.getElementById("txtFecha").value = date.format();
			},
					events:'../php/citas.php',

			eventClick: function(calEvent,jsEvent,view){
				$('#tituloEvento').html(calEvent.title);
				document.getElementById("txtDescripcion").value = calEvent.descripcion;
				$("#EventoModal").modal();
			}
		});
	});

	$('#btnGuardar').click(function(){
		var NuevoEvento = {
			title: $('#txtTitulo').val(),
			start: $('#txtFecha').val()+" "+$('#txtHora').val(),
			color: $('#txtColor').val(),
			descripcion: $('#txtDescripcion').val(),
			textColor: "#FFFFFF"
		};
		$('#CalendarioWeb').fullCalendar('renderEvent',NuevoEvento);
		$('#EventoModal').modal('toggle');
	});

		
	</script>
</body>
</html>