<?php
    include("../DataBase/DBAcces.php");
    session_start();
    $action= $_GET["action"];
    $url="";

    switch ($action) {
        case "registro":
            $name=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $user=$_POST["usuario"];
            $password=$_POST["pass"];
            $success=DBAcces::agregarUsuario($name,$apellido,$user,$password);
            if($success){
                $url="/SistemaJabones/home.php";
            }else{
                $url="/SistemaJabones/Singin.php";
            }

            break;
        case "ingreso":
            $user=$_POST["usuario"];
            $password=$_POST["pass"];
            $success=DBAcces::checkUser($user,$password);
            if($success>=0){
                $_SESSION["usuario"]=$user;
                $_SESSION["contra"]=$password;
                $url="/SistemaJabones/home.php";
            }else{
                $url="/SistemaJabones/index.php";
            }
            
            break;
        
    }


    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.$url);
	exit;


?>