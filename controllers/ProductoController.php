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
}