<?php

    class DBAcces {

        private static function connect(){
            $config=parse_ini_file('config.ini');
            $localhost=$config['host'];
            $database=$config['database'];
            $conn = new PDO("mysql:host=$localhost;dbname=$database", $config['username'], $config['password']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }

        public static function agregarUsuario($name,$apellido,$usuario,$password){
            try{
                $conn=self::connect();
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt=$conn->prepare("call insertUsuario(:nombre,:apellido,:nombreUsuario,:contrasena)");
                $stmt->bindParam(":nombre",$name,PDO::PARAM_STR);
                $stmt->bindParam(":apellido",$apellido,PDO::PARAM_STR);
                $stmt->bindParam(":nombreUsuario",$usuario,PDO::PARAM_STR);
                $stmt->bindParam(":contrasena",$password,PDO::PARAM_STR);
                return true;
            }catch(PDOException $e){
                echo "<br>" . $e->getMessage();
                return false;
            }finally{
                $conn=null;
            }
        }

        public static function checkUser($user,$pass){
            try{
                $conn=self::connect();
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt=$conn->prepare("call verifyLogin(:usuario,:contra)");
                $stmt->bindParam(":usuario",$user,PDO::PARAM_STR);
                $stmt->bindParam(":contra",$pass,PDO::PARAM_STR);
                $stmt->execute();
                $result=$stmt->fetch();
                return $result[0];
            }catch(PDOException $e){
                echo "<br>" . $e->getMessage();
                return -1;
            }finally{
                $conn=null;
            }
        }

        
    }
?>