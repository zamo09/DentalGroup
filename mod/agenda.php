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
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-clockpicker.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src='../js/jquery.min-calendar.js'></script>
	<script src='../js/moment.min.js'></script>
	<script src='../js/fullcalendar.js'></script>
	<script src="../js/es.js"></script>
	<script src="../js/bootstrap-clockpicker.js"></script>
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
			<div class="col-9">
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
			    	<input type="hidden" name="agenda" id="id_agenda">
			    	<input type="hidden" name="fecha" id="txtFecha">
			    	<div class="form-row">
				    	<div class="form-group col-md-12">
				    		<label>Selecciona un paciente</label>
				    		<?php $selectPacientes = $conexion->query($SQL);?>
							<select name="paciente" id="pacientesS" data-placeholder="Seleciona un paciente..." class="chosen-select" required>
								<option value=""></option>
								<?php while ($fila = $selectPacientes->fetch_array()) {
								echo "<option value='".$fila[1]."'>" . $fila[0] . "</option>";
								} ?>
							</select>
				    	</div>
				    </div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label>Titulo:</label><input type="text" class="form-control" name="titulo" id="txtTitulo" placeholder="Titulo de la cita">
						</div>
						<div class="form-group col-md-4">
							<label>Hora Inicio</label>
							<div class="input-group clockpicker" data-autoclose="true">
								<input type="text" name="hora" value="" class="form-control" id="txtHora" placeholder="Hora de la cita">
							</div>
								
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Descripcion</label><textarea id="txtDescripcion" class="form-control" rows="3" placeholder="Que vamos a hacer en la cita"></textarea>  	
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Color</label><input type="color" value="#37c929" class="form-control" id="txtColor" name="">
						</div>
					</div>
				</div>		    	
		      	<div class="modal-footer">
			      	<button type="button" id="btnGuardar" class="btn btn-success">Guardar</button>
			      	<button type="button" id="btnModificar" class="btn btn-primary">Modificar</button>
			        <button type="button" id="btnEliminar" class="btn btn-danger" >Borrar</button>
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
	<script src="../js/sweetalert.min.js"></script>
	
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
				$("#txtTitulo").val("");
				$("#txtDescripcion").val("");
				var fecha = new Date();
				var hora = fecha.getHours();
 				var minutos = fecha.getMinutes();
				if(hora<10){hora='0'+hora}
 				if(minutos<10){minutos='0'+minutos}
				$("#txtHora").val(hora+":"+minutos);
				$('#tituloEvento').html("Agenda una Cita");
				$("#txtColor").val("#37c929");
				$("#EventoModal").modal();
				$('#EventoModal').on('shown.bs.modal', function () {
				  $('.chosen-select', this).chosen('destroy').chosen();
				});
				$("#pacientesS").val([]);
				$("#txtFecha").val(date.format());
			},
			events:'../php/citas.php',

			eventClick: function(calEvent,jsEvent,view){
				$('#tituloEvento').html(calEvent.title);
				$("#txtTitulo").val(calEvent.title);
				$("#txtDescripcion").val(calEvent.descripcion);
				$("#txtColor").val(calEvent.color);
				FechaHora = calEvent.start._i.split(" ");
				$("#txtFecha").val(FechaHora[0]);
				$("#txtHora").val(FechaHora[1]);				
				$("#EventoModal").modal();
				$('#EventoModal').on('shown.bs.modal', function () {
				  $('.chosen-select', this).chosen('destroy').chosen();				  
				});
				$("#id_agenda").val(calEvent.id_agenda);
				seleccionarPaciente(calEvent.id_paciente);
			},
			editable:true,
			eventDrop:function(calEvent){
				swal({
				  title: "Modificar la cita?",
				  text: "Estas a punto de Modificar una cita esto es verdad?",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
					$('#tituloEvento').html(calEvent.title);
					$("#txtTitulo").val(calEvent.title);
					$("#txtDescripcion").val(calEvent.descripcion);
					$("#txtColor").val(calEvent.color);
					var FechaHora = calEvent.start.format().split("T");
					$("#txtFecha").val(FechaHora[0]);
					$("#txtHora").val(FechaHora[1]);
					$('#EventoModal').on('shown.bs.modal', function () {
					  $('.chosen-select', this).chosen('destroy').chosen();				  
					});
					$("#id_agenda").val(calEvent.id_agenda);
					seleccionarPaciente(calEvent.id_paciente);
				    RecolectarDatosGUI();
					EnviarInformacion('modificar',NuevoEvento,"¡Cita Modificada!","Vuelve a planear tus tiempos la cita ya cambio",true);
				  } else {
				    swal({
						icon: "info",
						title: "Todo Tranquilo",
						text: "No te preoucupes no Modificamos la cita",
						button: "Entiendo",
						timer: 3000,
					});
					$('#CalendarioWeb').fullCalendar('refetchEvents');
				  }
				});
			}
		});
	});

	function seleccionarPaciente(id){
		var select=document.getElementById("pacientesS");
		for(var i=1;i<select.length;i++){
			if(select.options[i].value==id){
				select.selectedIndex=i;
			}
		}
	};
	
	var NuevoEvento;

	$('#btnGuardar').click(function(){
		RecolectarDatosGUI();
		EnviarInformacion('agregar',NuevoEvento,"¡Cita Agendada!","Todo listo para recibir a su paciente");
	});

	$('#btnEliminar').click(function(){
		swal({
			  title: "Borrar Cita?",
			  text: "Estas a punto de borrar una cita esto es verdad ?",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    RecolectarDatosGUI();
				EnviarInformacion('eliminar',NuevoEvento,"¡Cita Borrada!","Ya no te preocupes por este paciente ya no vendra");
			  } else {
			    swal({
					icon: "info",
					title: "Todo Tranquilo",
					text: "No te preoucupes no borramos la cita",
					button: "Entiendo",
					timer: 3000,
				});
			  }
			});
		
	});

		$('#btnModificar').click(function(){
		swal({
			  title: "Modificar la cita?",
			  text: "Estas a punto de Modificar una cita esto es verdad?",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    RecolectarDatosGUI();
				EnviarInformacion('modificar',NuevoEvento,"¡Cita Modificada!","Vuelve a planear tus tiempos la cita ya cambio");
			  } else {
			    swal({
					icon: "info",
					title: "Todo Tranquilo",
					text: "No te preoucupes no Modificamos la cita",
					button: "Entiendo",
					timer: 3000,
				});
			  }
			});
		
	});

	function RecolectarDatosGUI(){
		NuevoEvento = {
			id_agenda: $("#id_agenda").val(),
			id_paciente: $('#pacientesS').val(),
			title: $('#txtTitulo').val(),
			start: $('#txtFecha').val()+" "+$('#txtHora').val(),
			end: $('#txtFecha').val()+" "+$('#txtHora').val(),
			color: $('#txtColor').val(),
			descripcion: $('#txtDescripcion').val(),
			textColor: "#000000"
		};
	};

	function EnviarInformacion(accion,objEvento,titulo,mensaje,modal){
		$.ajax({
			type: 'POST',
			url: '../php/citas.php?accion='+accion,
			data: objEvento,
			success: function(msg){
				if(msg){
					$('#CalendarioWeb').fullCalendar('refetchEvents');
					if (!modal){
						$('#EventoModal').modal('toggle');
					}
					swal({
						icon: "success",
						title: titulo,
						text: mensaje,
						button: "Ok",
						timer: 3000,
					});
				}
			},
			error:function(){
				swal({
					icon: "error",
					title: "¡Tenemos un error!",
					text: "Ocurrio un problema con la cita",
					button: "Entiendo",
					timer: 5000,
				});
			}
		});
	};

	$('.clockpicker').clockpicker();
	</script>
</body>
</html>