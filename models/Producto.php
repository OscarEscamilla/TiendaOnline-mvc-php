<?php 

class Producto{

    private $id;
    private $name;
    private $price;
    private $con;
   


    public function __construct(){
        $this->con = Database::connect();
    }
}