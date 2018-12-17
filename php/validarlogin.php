<?php
valida();
    function valida(){    	
            $user = $_POST['usuario'];
            $pass= $_POST['pass'];
            include ("conexion.php");
			$res = $conexion->query("SELECT id_usuario,tipo,nombre FROM Usuarios WHERE usuario ='".$user."' and contrasena='".$pass."';");
						$f = $res->fetch_assoc();
						if ($f['nombre'] == "" ){
							$conexion->close();
							$mensaje = "Usuario o contraseña incorrecta";
							echo "<script> alert('".$mensaje."'); window.location.assign('../index.php');</script>"; 
						}else{		
							session_start();
							$_SESSION['nom_Usuario']  = $f['nombre'];
							$_SESSION['User']  = $user;
							$_SESSION['id_user'] = $f['id_usuario'];
							$_SESSION['tipo_user']  = $f['tipo'];
							$conexion->close();
							header ("Location: ../mod/dentalgroup.php");							
						}
    }
?>