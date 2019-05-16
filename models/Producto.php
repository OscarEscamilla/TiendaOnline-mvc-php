<<<<<<< HEAD
<?php 

class Producto{

    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    //almacena la conexion
    private $con;
   


    public function __construct(){
        $this->con = Database::connect();
    }

    // getters and setters of variables 
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getCategoria_id(){
        return $this->categoria_id;
    }

    public function setCategoria_id($categoria_id){
        $this->categoria_id = $categoria_id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    
    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function getStock(){
        return $this->stock;
    }

    public function setStock($stock){
        $this->stock = $stock;
    }

    public function getOferta(){
        return $this->oferta;
    }

    public function setOferta($oferta){
        $this->oferta = $oferta;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
    }




    public function getAll(){
        try {

            $sql = 'SELECT * FROM productos';

            $result = $this->con->query($sql);

            return $result;


        } catch (PDOException $e) {

            echo "Error-004 model-productos getAll".$e->getMessage();

            

        }
       
    }
=======
<?php 

class Producto{

    private $id;
    private $name;
    private $price;
    private $con;
   


    public function __construct(){
        $this->con = Database::connect();
    }
>>>>>>> b83a338fd217011940fb357b68c8da4a972acdda
}