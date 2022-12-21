<?php

    class alumnoController{
        private $alum;

        public function __construct(){
            require_once("../../models/alumno.php");
            $this->alum = new alumnoModel();
        }

        public function insertAlumno($nombres,$apellidos,$dni,$telefono,$fecha_nacimiento,$email,$direccion,$genero,$departamento,$provincia,$distrito,$enfermedad,
                                        $comentario,$foto,$apoderado,$tel_apo){
            $this->alum->insertarAlumno($nombres,$apellidos,$dni,$telefono,$fecha_nacimiento,$email,$direccion,$genero,$departamento,$provincia,$distrito,$enfermedad,
                                        $comentario,$foto,$apoderado,$tel_apo);
            return header("Location:alumno.php");
        }

        public function listAlumno(){
            $list = $this->alum->listarAlumno();
            return $list;
        }
    }
?>