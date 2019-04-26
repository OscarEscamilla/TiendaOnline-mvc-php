<?php

class Utils{

    public static function deleteSession($nombre){
        if(isset($_SESSION[$nombre])){

            $_SESSION[$nombre] = null;
            unset($_SESSION[$nombre]);
        }
        
    }
}