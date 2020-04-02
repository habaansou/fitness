<?php

namespace _classes;

class Autoload
{
    static function resister(){
        spl_autoload_register(function($class){
            if(is_file("{$class}.php")){
                require_once ("{$class}.php");
            }else{
                die("Erreur de chargement des classes");
            }
        });
    }
}
