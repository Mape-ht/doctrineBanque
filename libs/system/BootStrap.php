<?php
namespace libs\system;

class BootStrap{


    public function __construct()
    {
        if(isset($_GET["url"])){

            //echo $_GET["url"];
            $url = explode("/",$_GET["url"]); //explode permet de convertir une chaine en tableau
            $controller_file = "src/controller/".$url[0]."Controller.php";

            // var_dump(file_exists($controller_file));
            // die;

            if(file_exists($controller_file)){

                require_once $controller_file;
                $file = $url[0]."Controller"; 

                if(class_exists($file)){
                        $controller_object = new $file();

                    // var_dump($controller_object);
                    // die;

                    if(isset($url[1])){

                        $method = $url[1]; 
        
                        if(method_exists($controller_object, $method)){
        
                            $controller_object->$method();
        
                        }else{

        
                            die($method." n'existe pas dans le Controller ".$file);
                        }
        
                    }else{

                        if(method_exists($controller_object,"index")){
                            $controller_object->index();
                        }else{
                            die ("La Methode index n'existe pas dans le controller ".$url[0]."Controller");
                        }
                    }
                } else {
                    die("La Classe".$file." n'existe pas");
                }



            }else{

                die( "Le fichier ".$controller_file." n'existe pas");
            }

            

        }else{

            echo "Tout est ok !!!";
        }

    }

} 

?>
