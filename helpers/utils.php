<?php

class Utils{

    public static function deleteSession($nombre){
        if(isset($_SESSION[$nombre])){

            $_SESSION[$nombre] = null;
            unset($_SESSION[$nombre]);

            
        }
        
    }

    public static function isAdmin(){
        if (!isset($_SESSION['admin'])) {
            header('Location:'.base_url);
        }
    }

    public static function showCategorias(){
        require_once 'models/Categoria.php';
        $modelCategoria = new Categoria();
        $result = $modelCategoria->getAll();
        return $result;
    }
}