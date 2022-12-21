<?php

    class alumnoModel{
        private $conectar;

        public function __construct(){
            require_once("../../config/conexion.php");
            $conn = new Conectar();
            $this->conectar = $conn->Conexion();
        }

        public function insertarAlumno($nombres,$apellidos,$dni,$telefono,$fecha_nacimiento,$email,$direccion,$genero,$departamento,$provincia,$distrito,$enfermedad,
                                        $comentario,$foto,$apoderado,$tel_apo){
            $statement = "INSERT INTO alumno(id_alumno,nombres,apellidos,dni,telefono,fecha_nacimiento,email,direccion,genero,departamento,provincia,distrito,enfermedad,
                                                comentario,foto,apoderado,tel_apo,fecha_creacion,estado) 
                            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), '1')";
            $statement = $this->conectar->prepare($statement);
            $statement->bindValue(1, $nombres);
            $statement->bindValue(2, $apellidos);
            $statement->bindValue(3, $dni);
            $statement->bindValue(4, $telefono);
            $statement->bindValue(5, $fecha_nacimiento);
            $statement->bindValue(6, $email);
            $statement->bindValue(7, $direccion);
            $statement->bindValue(8, $genero);
            $statement->bindValue(9, $departamento);
            $statement->bindValue(10, $provincia);
            $statement->bindValue(11, $distrito);
            $statement->bindValue(12, $enfermedad);
            $statement->bindValue(13, $comentario);
            $statement->bindValue(14, $foto);
            $statement->bindValue(15, $apoderado);
            $statement->bindValue(16, $tel_apo);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }

        public function listarAlumno(){
            $statement = "SELECT * FROM alumno WHERE estado=1";
            $statement = $this->conectar->prepare($statement);
            $statement->execute();
            return $resultado=$statement->fetchAll();
        }
    }

?>