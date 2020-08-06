<?php
    session_start();
    $ingredientes=[];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Añadir-Sistema de Jabones</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="style/stylesheet.css">
    </head>
    <body>
        <?php
            include('header.php');
            include('fooder.php');
        ?>
        <div class="row">
            <div class="col s2 grey lighten-5 border-right border-top full " >
                <div class="container s12 l12">
                    <h4 class="brand-register-text center">Bienvenido</h4>
                    <h4 class="brand-register-text center"><?php echo $_SESSION["usuario"] ?></h4>
                    </br>
                    </br>
                </div>
            </div>
            <div class="col s10">
                <h2 class="brand-register-text center">Crear nueva receta</h2>
                <div class="container mt-s">
                    <div class="row">
                        <form class="col s12 offset-s3" action="backend/controller.php?action=ingreso" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="nombre" id="nombre" type="text" required>
                                    <label for="nombre">Nombre de la receta:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="notas" class="materialize-textarea"></textarea>
                                    <label for="notas">Notas</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6 ">
                                    Ingredientes:
                                    <div id="lista" class="lista">
                                    </div>

                                </div>
                                <div class="input-field col s6">
                                    <input name="ingrediente" id="ingrediente" type="text">
                                    <label for="ingrediente">Agregar ingrediente:</label>
                                </div>
                                
                            </div>
                            <div class="row text-left">
                                <button onclick="add()" class="btn-small ml-s waves-effect waves-light brand-register right" type="button">Añadir</button>
                                <button onclick="remove()" class="btn-small waves-effect waves-light brand-register right" type="button">Reiniciar</button>
                            </div>
                            <button class="btn waves-effect waves-light deep-orange accent-2" type="submit">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function add(){
                var contenido= document.getElementById("ingrediente").value;
                var actual=document.getElementById("lista").innerHTML;
                document.getElementById("lista").innerHTML = actual+"</br>"+contenido;
            }
            function remove(){
                document.getElementById("lista").innerHTML = "";
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
</html>