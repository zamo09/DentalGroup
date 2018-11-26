<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Insert title here</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<section id="logo">
		<a href="#"><img src="img/logo.jpg" width='250' height='100' alt="" /></a>
	</section>
	
	<section class="container">
		<section class="row">
			<form method="post" action="php/validarlogin.php" role="login">
				<div>
					<label>Usuario</label>
					<input type="text" name="usuario" required class="form-control" />
				</div>
				
				<div>
					<label>Contraseña</label>
					<input type="password" name="pass" required class="form-control" />
				</div>
			
				<section>
					<button type="submit" name="go" class="btn btn-block">Iniciar</button>
				</section>
			</form>
		</section>
	</section>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>