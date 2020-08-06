<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home-Sistema de Jabones</title>
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
                <h6>Filtrar</h6>
                <div class="collection">
                    <a href="" class="collection-item">Tipo</a>
                    <a href="" class="collection-item">Alfabetico</a>
                    <a href="" class="collection-item">Molde</a>
                </div>
            </div>
            <div class="col s10">
                <div class="container mt-s">
                    
                    <div class="row">
                        <?php 
                            if(isset($_SESSION["recetas"])){
                                if($_SESSION["recetas"]===""){
                                    echo '<h6 class="center">No tiene recetas disponibles</h6>';
                                }
                            }else{
                                echo '<h6 class="center">No tiene recetas disponibles</h6>';
                            }
                        ?>
                    </div>
                    </br>
                    </br>
                    <div class="row">
                        <a href="nuevaReceta.php" class="btn-floating btn-large waves-effect waves-light brand-register right"><i class="material-icons">add</i></a>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>

