<?php 
$nombre = $_POST['nombre'];
$cantidadmin = $_POST['cantidadmin'];
$cantidad = $_POST['cantidad'];
include("conexion.php");
session_start();
$sql_producto = "INSERT INTO Productos (nombre,cantidadmin,cantidad,activo,id_usuario) VALUES ('".$nombre."',".$cantidadmin.",".$cantidad.",1,".$_SESSION['id_user'].");";
	if ($resultado = $conexion->query($sql_producto)) {
		$conexion->close();
		echo "<script>
               			alert('Producto guardado con exito');
						window.location= '../mod/nuevoproducto.php'
    				</script>";
		}else{
			$conexion->close();
			echo "<script>
               			alert('Error al guardar el producto');               			
    				</script>";
					echo $sql_producto; 					
		}
?>