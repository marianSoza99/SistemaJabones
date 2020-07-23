<?php

    class DBAcces {

        private static function connect(){
            $config=parse_ini_file('config.ini');
            $localhost=$config['host'];
            $conn = new PDO("mysql:host=$localhost;dbname=myDB", $config['username'], $config['password']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }

        
    }
?>