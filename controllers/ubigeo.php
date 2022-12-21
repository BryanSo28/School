<?php

    class ubigeoController{
        private $ubi;

        public function __construct(){
            require_once("../../models/ubigeo.php");
            $this->ubi = new ubigeoModel();
        }

        public function depa(){
            $ubicacion = $this->ubi->departamento();
            return $ubicacion;
        }

        public function prov(){
            $ubicacion = $this->ubi->provincia();
            return $ubicacion;
        }

        public function dist(){
            $ubicacion = $this->ubi->distrito();
            return $ubicacion;
        }
    }
?>