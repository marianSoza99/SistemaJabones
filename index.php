<?php
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Ingresar-Sistema de Jabones</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="style/stylesheet.css">
	</head>
	<body>
		<?php
            include('header.php');
            include('fooder.php');
        ?>
		<div class="container">
			<h3 class="red-text text-accent-1 center">Log In</h3>

			<div class="row">
				<form class="col s12 offset-s3" action="backend/controller.php?action=ingreso" method="POST">
					<div class="row">
						<div class="input-field col s12">
							<input name="usuario" id="usuario" type="text" class="validate" required>
							<label for="usuario">Nombre de usuario:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="pass" id="pass" type="password" class="validate" required>
							<label for="pass">Contraseña:</label>
						</div>
					</div>
					<button class="btn waves-effect waves-light deep-orange accent-2" type="submit">Ingresar</button>
				</form>
			</div>
		</div>
		

		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</body>





</html>
