<?php

    class ubigeoModel{
        private $conectar;

        public function __construct(){
            require_once("../../config/conexion.php");
            $conn = new Conectar();
            $this->conectar = $conn->Conexion();
        }

        public function departamento(){
            $statement = "SELECT * FROM ubdepartamento";
            $statement = $this->conectar->prepare($statement);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }

        public function provincia(){
            $statement = "SELECT * FROM ubprovincia";
            $statement = $this->conectar->prepare($statement);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }

        public function distrito(){
            $statement = "SELECT * FROM ubdistrito";
            $statement = $this->conectar->prepare($statement);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }
    }
?>
