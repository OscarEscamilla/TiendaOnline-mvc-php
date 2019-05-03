<?php


class productoController{

    public function index(){
        //renderizar vista 
        require_once 'views/producto/destacados.php';
    }

    public function gestion(){

        
        require_once 'views/producto/gestion.php';
    }
}