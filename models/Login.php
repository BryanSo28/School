<?php

    class loginModel{

        private $conectar;

        public function __construct(){
            require_once("config/conexion.php");
            $conn = new Conectar();
            $this->conectar = $conn->Conexion();
        }

        public function ingresar($usuario,$clave){
            $stm="SELECT * FROM usuarios where usuario=? and clave=? and estado=1";
            $stm = $this->conectar->prepare($stm);
            $stm->bindValue(1, $usuario);
            $stm->bindValue(2, $clave);
            $stm->execute();
            $resultado=$stm->fetch();
            return $resultado;
        }

        public function buscarAlumno($dni){
            $stm="SELECT * FROM alumno where dni=? and estado=1";
            $stm = $this->conectar->prepare($stm);
            $stm->bindValue(1, $dni);
            $stm->execute();
            $resultado=$stm->fetch();
            return $resultado;
        }

        public function buscarProfesor($dni){
            $stm="SELECT * FROM profesor where dni=? and estado=1";
            $stm = $this->conectar->prepare($stm);
            $stm->bindValue(1, $dni);
            $stm->execute();
            $resultado=$stm->fetch();
            return $resultado;
        }

    }

?>