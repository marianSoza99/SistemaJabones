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

        public static function agregarUsuario(){
            try{
                $conn=self::connect();
                $sql="";
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }finally{
                $conn=null;
            }
        }

        
    }
?>