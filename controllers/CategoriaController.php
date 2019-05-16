<?php

require_once 'models/Categoria.php';

class categoriaController{
    
    protected $modelCategoria;

    public function __construct(){

        $this->modelCategoria = new Categoria();
        

    }

    public function index(){
        Utils::isAdmin();

        $result = $this->modelCategoria->getAll();
        require_once 'views/categoria/index.php';
    }


    public function save(){
        Utils::isAdmin();
        if($_POST){
            $this->modelCategoria->setNombre($_POST['nombre']);
            $result = $this->modelCategoria->save();

            if ($result) {
                $_SESSION['alert'] = true;
            }


            header('Location:'.base_url.'categoria/index');
        }

        
    }


    public function delete(){
        Utils::isAdmin();
        if($_GET['id']){
            $this->modelCategoria->setId($_GET['id']);
            $this->modelCategoria->delete();
            header('Location:'.base_url.'categoria/index');
        }

    }





    
}