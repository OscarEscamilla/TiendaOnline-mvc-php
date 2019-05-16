<?php

// funcion que recibe el nombre de la clase para realizar un include al archivo con el mismo nombre
function controllers_autoload($classname){
    include 'controllers/'.$classname.'.php';
}

// esta funcion es como un iterador sobre la ruta dada en la funcion para cargar todas las clases de la carpeta controllers
spl_autoload_register('controllers_autoload');