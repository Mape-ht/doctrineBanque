<?php

class CompteController{


    public function addCompteController(){

        $compte = new Compte();
        $compte->setNumerocompte("111111");
        $compte->setClerib("11");
        $compte->setDatecrea("2020-08-12");
        $compte->setSolde("100000");

        $comptedb = new CompteDB();

        $clientDb = new ClientPhysiqueDB();

        // var_dump($comptedb->getClientPhysique(1)->getId());
        // die;
        $compte->setClientPhy($comptedb->getClientPhysique(1));

        $ok=$comptedb->addCompte($compte);

        if ($ok !=null){

            echo "compte créé!";

        }else{

            echo "erreur!!!";
        }
        
    }
}

?>