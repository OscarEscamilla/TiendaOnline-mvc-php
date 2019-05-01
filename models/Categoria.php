<?php


class Categoria{

    private $id;
    private $nombre;

    public function __construct(){
        //almaceamos la conexion accedinedo al metodo estatico connect
        $this->con = Database::connect(); 
        
    }

    public function getNombre(){

        return $this->nombre;

    }

    public function setNombre($nombre){
        
        $this->nombre = $nombre;

    }

    public function getId(){

        return $this->id;
        
    }

    public function setId($id){
        
        $this->id = $id;

    }

    
    


}