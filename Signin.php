<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registro-Sistema de Jabones</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="style/stylesheet.css">
    </head>
    <body>
        <?php
            include('header.php');
            include('fooder.php');
        ?>
        <div class="container">
            <h3 class="red-text text-accent-1 center">Registro</h3>
            <div class="row">
                <form class="col s6 offset-s3" action="backend/controller.php?action=registro" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="nombre" id="nombre" type="text" class="" required>
							<label for="nombre">Nombre:</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="apellido" id="apellido" type="text" class="" required>
							<label for="apellido">Apellido:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="usuario" id="usuario" type="text" class="" required>
							<label for="usuario">Nombre de usuario:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="pass" id="pass" type="password" class="validate" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            <label for="pass">Contraseña:</label>
                            <span class="helper-text" data-error="La contraseña debe contener al menos un número, una mayuscula, una minuscula y un mínimo de 8 caracteres"></span>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light deep-orange accent-2" type="submit">Registrarse</button>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>


