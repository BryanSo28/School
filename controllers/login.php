<?php

    class loginController{
        
        private $login;

        /*public function __construct(){
            require_once("models/login.php");
            $this->login = new loginModel();
        }*/

        public function login($usuario,$clave){
            //$this->login->ingresar($usuario,$clave);
            return header("Location:views/Home/home.php");
        }
    }

?>