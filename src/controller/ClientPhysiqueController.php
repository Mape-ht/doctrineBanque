<?php

class ClientPhysiqueController{



    public function addClientPhysiqueController(){

        $clientPhy = new ClientPhysique();
        $clientPhy->setNom("Diouf");
        $clientPhy->setPrenom("Babacar");
        $clientPhy->setAdresse("Liberte6");
        $clientPhy->setTelephone("777894545");
        $clientPhy->setEmail("bdiouf@gmail.com");
        $clientPhy->setStatut("nonsalarie");
        $clientPhy->setSalaire("0");
        $clientPhy->setCin("123456");

        $clientPhysiqueDB = new ClientPhysiqueDB();
        $ok=$clientPhysiqueDB->addClientPhysique($clientPhy);
        
        if ($ok !=null){

            echo "client physique inséré";

        }else{

            echo "erreur!!!";
        }

    }
}


?>