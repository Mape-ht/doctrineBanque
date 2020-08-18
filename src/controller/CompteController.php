<?php

use src\model\CompteDB;
use src\model\TypeFraisDB;
use src\model\TypecompteDB;
use src\model\ClientMoralDB;
use src\model\ClientPhysiqueDB;
use libs\system\Controller;
use libs\system\Model;
use libs\system\View;


class CompteController extends Controller{


    public function index(){

        return $this->view->load("compte/add");
    }

    public function addCompte(){

        extract($_POST);
        if (isset($_POST) && empty($_POST) == false){

            $compte = new Compte();
            $comptedb = new CompteDB();
            $typefraisdb = new TypeFraisDB();
            $clientmor = new ClientMoralDB();
            $cliphy =new ClientPhysiqueDB();
            $typecompt = new TypecompteDB();

            $compte->setNumerocompte($_POST["numCompte"]); //récupérer les $_post du view
            $compte->setClerib($_POST["cle"]);
            $compte->setTypefraiss(["typesfrais"]);
            $compte->setDatecrea($_POST["dateOuv"]);
            // $compte->setClientmo($clientmor->getClientMoral($_POST["employeur"]));
            // $compte->setClientPhy($cliphy->getClientPhysique($_POST["nomsClt"]));
            $compte->setTypecompte($_POST["typeCompte"]);
            
            
            $ok=$comptedb->addCompte($compte);

            if ($ok !=null){

                echo "compte créé!";

            }else{

                echo "erreur!!!";
            }


        }

        
        
    }

    // $compte = new Compte();
    // $compte->setNumerocompte("111111");
    // $compte->setClerib("11");
    // $compte->setDatecrea("2020-08-12");
    // $compte->setSolde("100000");



}

?>