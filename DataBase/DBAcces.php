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
                $sql="";
                return true;
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
                return false;
            }finally{
                $conn=null;
            }
        }

        public static function checkUser($user,$pass){
            try{
                $conn=self::connect();
                $sql="";
                return 0;
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
                return -1;
            }finally{
                $conn=null;
            }
        }

        
    }
?>