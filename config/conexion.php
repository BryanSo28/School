<?php

    session_start();
    
    class Conectar{
        private $usuario = "root";
        private $password = "";
        private $server = "localhost";
        private $bd = "colegio";

        public function Conexion(){
            try {
                $conexion = new PDO("mysql:host=".$this->server.";dbname=".$this->bd,$this->usuario,$this->password);
                return $conexion;
            } 
            catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>