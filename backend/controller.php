<?php
    session_start();
    $action= $_GET["action"];
    $url="";

    switch ($action) {
        case "registro":

            break;
        case "ingreso":
            $user=$_POST["usuario"];
            $password=$_POST["pass"];

            break;
        
    }


?>