<?php

    class loginController{
        
        private $login;

        public function __construct(){
            require_once("models/login.php");
            $this->login = new loginModel();
        }

        public function login($usuario,$clave){
            $resultado = $this->login->ingresar($usuario,$clave);
            if (is_array($resultado) and count($resultado)>0) {

                $alumno = $this->login->buscarAlumno($resultado["dni"]);
                if (is_array($alumno) and count($alumno)>0) {
                    $_SESSION["nombres"]=$alumno["nombres"];
                    $_SESSION["apellidos"]=$alumno["apellidos"];
                }else {
                    $profesor = $this->login->buscarProfesor($resultado["dni"]);
                    if (is_array($profesor) and count($profesor)>0) {
                        $_SESSION["nombres"]=$profesor["nombres"];
                        $_SESSION["apellidos"]=$profesor["apellidos"];
                    }
                }

                $_SESSION["id_usuario"]=$resultado["id_usuario"];
                header("Location:views/Home/home.php");
                exit(); 
            }else {
                header("Location:index.php?m=1");
                exit();
            }
        }
    }

?>