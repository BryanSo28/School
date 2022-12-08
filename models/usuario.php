<?php

    class usuarioModel{

        private $conectar;

        public function __construct(){
            require_once("../../config/conexion.php");
            $conn = new Conectar();
            $this->conectar = $conn->Conexion();
        }

        public function insertarUsuario($usuario,$clave,$rol,$email){
            $statement = "INSERT INTO usuarios(id_usuario,usuario,clave,rol,email,fecha_creacion,estado) VALUES (NULL, ?, ?, ?, ?, now(), '1')";
            $statement = $this->conectar->prepare($statement);
            $statement->bindValue(1, $usuario);
            $statement->bindValue(2, $clave);
            $statement->bindValue(3, $rol);
            $statement->bindValue(4, $email);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }

        public function listarUsuario(){
            $statement = "SELECT * FROM usuarios WHERE estado=1";
            $statement = $this->conectar->prepare($statement);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }

        public function listarDNI(){
            $statement = "(SELECT dni FROM alumno where estado=1)
                            union 
                        (SELECT dni FROM usuarios where estado=1)";
            $statement = $this->conectar->prepare($statement);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }
    }

?>