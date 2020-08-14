<?php


use src\model\ClientPhysiqueDB;
use src\model\ClientMoralDB;
use src\entities\ClientMoral;
use libs\system\Controller;

class ClientMoralController extends Controller
{

    public function index(){

        return $this->view->load("client/client");
    }

    public function addClientMoralController()
    {

        // $clientMoral = new ClientMoral(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)

        if(isset($_POST['ajouter'])){

        }else {
            return $this->view->load("client/addClientMoralController");
        }

    }
}

// $clientMoral->setAdresse("Mamelles");
        // $clientMoral->setGerant("Moustapha");
        // $clientMoral->setRaisonso("NVT");
        // $clientMoral->setTelephone("338695252");
        // $clientMoral->setNinea("N1258769");

        // extract($_POST);
        // if(isset($_POST['ajouter'])){
        // var_dump($_POST);
        // die;

        //     if ($_POST['cltp'] == "1"){
    
    
    
        //         if (isset($_POST) && empty($_POST) == false) { //voir si $ post existe et si champs pas vide
    
                      
        //             $clientMoral->setRaisonso($_POST["raisonSo"]); //récupérer les $_post du view
        //             $clientMoral->setAdresse($_POST["adresseEmploi"]);
        //             $clientMoral->setNinea($_POST["numIdEmployeur"]);
        //             $clientMoral->setTelephone($_POST["telephoneMo"]);
        //             $clientMoral->setGerant($_POST["nomsEmployeur"]);
    
                    //  $clientmoraldb = new ClientMoralDB();
                    //  $ok=$clientmoraldb->addClientMoral($clientMoral);
           
                    //  if ($ok !=null) {
    
                    //     echo "client moral inséré!";
                    //      return $this->view->load("client/client");
    
    
    
        //             } else{
    
        //                 echo "erreur!!!";
        //             }
        //     }
    
    
        // }else if($_POST['cltp'] == "2"){
    
    
    
        //     if (isset($_POST) && empty($_POST) == false){
    
        //         $clientP = new ClientPhysique(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
    
        //         //$clientP->setTypeclt($_POST["cltp"]);
        //         $clientP->setNom($_POST["nomsClt"]); //récupérer les $_post du view
        //         $clientP->setPrenom($_POST["prenoms"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
        //         $clientP->setTelephone($_POST["phone"]); //récupérer les $_post du view
        //         $clientP->setStatut($_POST["statut"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
        //         $clientP->setSalaire($_POST["salaire"]);
        //         $clientP->setAdresse($_POST["adresse"]);
        //         $clientP->setEmail($_POST["email"]);
        //         $clientP->setCin($_POST["numIdTravail"]);
        //         $clientP->setTypeclt_id($_POST["cltp"]);
        //         $clientP->setCltmoral_id($_POST["employeur"]);
        //                     // 
    
        //         $clientPhyRep = new ClientPhysiqueRepository();
        //         var_dump($clientPhyRep->addClientPhy($clientP));
        //         // var_dump($clientP);
        //         $ok = $clientPhyRep->addClientPhy($clientP);
        //         //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
        //         //var_dump($ok);
        //         //die;
        //         if ($ok) {
    
        //             //header('location:../view/client/client.php');//si insertion ok retour à la page d'accueil
        //             echo ("=====Client bien inséré !=====");
        //         }
        //     } else {
        //         echo "Erreur !..."; //sinon message erreur
        //    }
    
    
//}
