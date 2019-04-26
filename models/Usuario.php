<?php


class Usuario{

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $image;
    private $con;

    public function __construct(){
        //almaceamos la conexion accedinedo al metodo estatico connect
        $this->con = Database::connect(); 
        $this->rol = 'user';
        $this->image = null;
    }

    //getters y setters de tabla usuarios
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }


    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }


    public function save(){
        try {
            //$con = $this->db->connect();
            $statement = $this->con->prepare("INSERT INTO usuarios (nombre, apellidos, email, password, rol, imagen) VALUES (?, ?, ?, ?, ?, ?)");
            $query = $statement->execute([
                $this->getNombre(),
                $this->getApellidos(), 
                $this->getEmail(),
                $this->getPassword(),
                $this->getRol(),
                $this->getImage()]); # Pasar en el mismo orden de los ?
            #execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
            #Con eso podemos evaluar

            if ($query) {
                return true;
            }

            return false;

        } catch (PDOException $e) {
            
            echo "Error-001-UserModel-insert";
            echo $e->getMessage();

            return false;
        }

    }

    //verificar que exista el usuario
    public function login($email, $password){
        try {

            $statement = $this->con->prepare("SELECT * FROM usuarios WHERE email= ? AND password = ?");
            $query = $statement->execute([$email, $password]);
           
            var_dump($statement);
            while( $row = $query->fetch() ){ //recorremos la consulta a tabla login y recorremos el resultado

                var_dump($row);
  
               
            }


        } catch (PDOException $e) {

            echo "Error-002 model-usuario action-login".$e->getMessage();

        }
       
    }





}