<?php
require_once 'models/Usuario.php';

class usuarioController{

    public function index(){
        echo "controller usuarios action index";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){
            
            $modelUsuario = new Usuario();

            $modelUsuario->setNombre($_POST['nombre']);
            $modelUsuario->setApellidos($_POST['apellidos']);
            $modelUsuario->setEmail($_POST['email']);
            $modelUsuario->setPassword($_POST['password']);


            var_dump($modelUsuario);
        }
    }
}