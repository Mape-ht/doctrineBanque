<?php
namespace libs\system;

class View{


    public function __construct()
    {
    
    } 

    public function load(){ //pour charger le view


    $num = func_num_args(); //compter le nb d'argument
    $args = func_get_args(); //recuperer les raguments passés
    
    
     //vérifier le nb d'argument passé à l'appel
        switch ($num) {  

            case 1:
                $file="src/view/".$args[0].".php";
                if(file_exists($file))
                {
                    require_once $file;
                }else{
                    die($file." n'existe pas comme view");
                } 
                break;
            case 2:
                $file = "src/view/".$args[0].".php";
                if(file_exists($file))
                {
                    $data = $args[1];
                    require_once $file;
                }else{
                    die($file." n'existe pas comme view");
                } 
                break; 

        } 




    }        
}


?>