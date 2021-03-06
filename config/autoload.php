<?php

class Autoloader{

    static function register(){

        spl_autoload_register(array(__CLASS__, "autoload"));
    }

    static function autoload($class){

        //class
        if (file_exists("src/model/".$class.".php"))
        {

            require_once "src/model/".$class.".php";
        
        }else if(file_exists("src/controller/".$class.".php")){


             require_once "src/controller/".$class.".php";    
        }

        //namespace
        //var_dump($class);
        // die;
        if (file_exists("src/controller/".str_replace("\\", "/",$class.".php"))){

          require_once "src/controller/".str_replace("\\", "/",$class.".php");
     }else {

        // die("merci d'utiliser le mot clé USE suivi de ".$class);
         }

    }

}

Autoloader::register();



?>