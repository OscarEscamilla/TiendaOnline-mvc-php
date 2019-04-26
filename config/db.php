<?php

class Database{

  /*
    private $user;
    private $db;
    private $host;
    private $charset;
    private $password;

    public function __construct(){
        
      $this->host = 'localhost';
      $this->db = 'tienda';
      $this->user = 'root';
      $this->password = '';
      $this->charset = 'utf8mb4';

    }
    */
    public static function connect(){
        try{
              //variable que almacena todo un string con los parametros de conexion
            $connection = "mysql:host=localhost;dbname=tienda;charset=utf8mb4";
              //opciones para devolver mensajes de error con descripcion
            $options = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => false,
            ];
              //creamos objeto de la clase PDO pasando los parametros que corresponden
            $db = new PDO($connection, 'root', '', $options);
              //si todo s realiza correctamente devolvemos el objeto $pdo que almacena la conexion
            
            return $db;


            /*
            $db = new mysqli($this->host , $this->user, $this->password, $this->db);
            $db->query("SET NAMES 'utf8'");
            return $db;
            */
        
        }catch(PDOException $e){

            print_r('fallo en conexion a db'. $e->getMessage());
            
        }
    }
    
}
