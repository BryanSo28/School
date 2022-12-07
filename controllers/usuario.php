<?php
    class usuarioController{

        private $user;

        public function __construct(){
            require_once("../../models/usuario.php");
            $this->user = new usuarioModel();
        }

        public function insertUsuario($usuario,$clave,$rol,$email){
            $this->user->insertarUsuario($usuario,$clave,$rol,$email);
            return header("Location:usuario.php");
            //return ($id!=false) ? header("Location:usuario.php?id=".$id) : header("Location:registrar.php?id=".$id);
        }

        public function listUsuario(){
            $list = $this->user->listarUsuario();
            return $list;
        }
    }

?>