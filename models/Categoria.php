<?php


class Categoria{

    private $id;
    private $nombre;

    public function __construct(){
        //almaceamos la conexion accedinedo al metodo estatico connect
        $this->con = Database::connect(); 
        
    }

    //getter y setters

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

    //metodos extras

    public function save(){
        try {
            //$con = $this->db->connect();
            $statement = $this->con->prepare("INSERT INTO categorias (nombre) VALUES (?)");
            $query = $statement->execute([$this->getNombre()]); # Pasar en el mismo orden de los ?
            #execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
            #Con eso podemos evaluar

            if ($query) {
                return true;
            }else{

                return false;

            }

            

        } catch (PDOException $e) {
            
            echo "error-save-categoria";

            return false;
        }

    }


    public function getAll(){
        try {

            $sql = 'SELECT * FROM categorias';

            $result = $this->con->query($sql);

            return $result;


        } catch (PDOException $e) {

            echo "Error-002 model-ucategorias getAll".$e->getMessage();

            

        }
       
    }

    public function delete(){
        try {
            //$con = $this->db->connect();
            $statement = $this->con->prepare("DELETE FROM categorias WHERE id = ?");
            $query = $statement->execute([$this->getId()]); # Pasar en el mismo orden de los ?
            #execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
            #Con eso podemos evaluar

        } catch (PDOException $e) {
            
            echo "error-delete-categoria";

            return false;
        }
    }


    


}