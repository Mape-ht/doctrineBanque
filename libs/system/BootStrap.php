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

                $controller_object = new $file();

                // var_dump($controller_object);
                // die;

                if(isset($url[1])){

                    $method = $url[1]; 
    
                    if(method_exists($controller_object, $method)){
    
                        $controller_object->$method();
    
                    }else{

    
                        die($method."n'existe pas dans la methode".$file);
                    }
    
                }else{

                    $controller_object->index();
                }



            }else{


                die($controller_file."n'existe pas");
            }

            

        }else{

            echo "Tout est ok !!!";
        }

    }

} 

?>






<?php
// namespace system;
// use src\controller\Welcome;

// class BootApp
// {
//     public function __construct()
//     {
//         if(isset($_GET['url']))
//         {
//             //echo $_GET['url'];
//             $url = explode("/", $_GET['url']);
//             //echo $url[0];
//             if(isset($url[0]))
//             {
//                 $controller_file = 'src/controller/'.$url[0].'Controller.php';
//                 if(file_exists($controller_file))
//                 {
//                     require_once $controller_file;
//                     $controller = $url[0];
//                     $controller_object = new $controller();
//                     if(isset($url[1]))
//                     {
//                         if($url[1] == "")
//                         {
//                             if(method_exists($controller_object, "index"))
//                             {
//                                 $controller_object->index();
//                             }else{
//                                 die("La methode index n'existe pas dans ".$url[0]);
//                             }
//                         }else{
//                             if(method_exists($controller_object, $url[1]))
//                             {
//                                 $m = $url[1];
//                                 if(isset($url[2]))
//                                 {
//                                     $controller_object->$m($url[2]); 
//                                 }else{
//                                     $controller_object->$m();  
//                                 }
//                             }else{
//                                 die("La methode ".$url[1]." n'existe pas dans ".$url[0]);
//                             } 
//                         }
//                     }
//                 }else{
//                         die('Le controller <b>'.$url[0].'Controller.php</b>, non cree');
//                 }
//             }
//         } else {
//             //require_once 'src/controller/WelcomeController.php';
//             $welcome = new Welcome();
//             $welcome->index();
//         }
//     }
// }

// ?>