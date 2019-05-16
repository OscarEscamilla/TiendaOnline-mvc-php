<<<<<<< HEAD
<?php

require_once 'models/Producto.php';

class productoController{

    public function __construct(){

        $this->modelProducto = new Producto();

    }

    public function index(){
        //renderizar vista 
        require_once 'views/producto/destacados.php';
    }

    public function gestion(){
        Utils::isAdmin(); //metodo herlpers que comprueba si es un administrador antes de permitir el acceso a la ruta 
        $result = $this->modelProducto->getAll();
        require_once 'views/producto/gestion.php';
    }


    public function nuevo(){
        Utils::isAdmin();
        require_once 'views/producto/nuevo.php';
    }

    public function save(){
        Utils::isAdmin();
        if (isset($_POST)) {
            var_dump($_POST);
        }
        //recibe formularios del archivo views/producto/nuevo.php
    }
=======
<?php


class productoController{

    public function index(){
        //renderizar vista 
        require_once 'views/producto/destacados.php';
    }

    public function gestion(){
        Utils::isAdmin();
        
        require_once 'views/producto/gestion.php';
    }
>>>>>>> b83a338fd217011940fb357b68c8da4a972acdda
}