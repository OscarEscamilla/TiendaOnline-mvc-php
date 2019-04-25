<?php


class usuarioController{

    public function index(){
        echo "controller usuarios action index";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){
            var_dump($_POST);
        }
    }
}