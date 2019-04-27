<?php
require_once 'models/Usuario.php';

class usuarioController{

    protected $modelUsuario;

    public function __construct(){

        $this->modelUsuario = new Usuario();

    }

    public function index(){
        echo "controller usuarios action index";
    }

    //renderiza formulario de registro 
    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    // registro de usuario 
    public function save(){
        if(isset($_POST)){
            
            

            $this->modelUsuario->setNombre($_POST['nombre']);
            $this->modelUsuario->setApellidos($_POST['apellidos']);
            $this->modelUsuario->setEmail($_POST['email']);
            $this->modelUsuario->setPassword(md5($_POST['password']));

            $save = $this->modelUsuario->save();
            if($save){

                $_SESSION['registro'] = 'completado';
                //echo "Registro completado!";
            }else{

                $_SESSION['registro'] = 'fallido';
                //echo "Registro fallido";
            }

        }else{
            $_SESSION['registro'] = 'fallido';
            header('Location:'.base_url.'usuario/registro');
        }
        header('Location:'.base_url.'usuario/registro'); 
    }


    // funcion de logeo
    public function login(){
        //comprobar los datos que llegan de POST
        if (isset($_POST)) {
            // realizar consulta a db con los datos recibidos

            //envio de email y password recibidos por post enviados al modelo para ser usados en la consulta a db
            $this->modelUsuario->setEmail($_POST['email']);
            $this->modelUsuario->setPassword(md5($_POST['password']));


            $usuario = $this->modelUsuario->login();

            if($usuario && count($usuario) == 1){ //evaluamos si la variable usuario da true y ademas el numero de filas es = 1 
               
                $_SESSION['usuario'] = $usuario;//creamos la sesion del usuario

                var_dump($_SESSION['usuario']);
              
                if($this->modelUsuario->getRol() == 'admin'){

                   
                    echo " y es admin :O";
                    
                    $_SESSION['admin'] = 'true';

                    var_dump($_SESSION['admin']);

                    
                }

            }else{
                //invalidar session y mostrar mensaje
                echo "Correo o contraseña invalidos";
            }
           
        

        }
        //header('Location:'.base_url);

        //crear session

    }
}