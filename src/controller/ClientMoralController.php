<?php


class ClientMoralController{


    public function addClientMoralController(){

        $clientMoral = New ClientMoral();
        $clientMoral->setAdresse("Mamelles");
        $clientMoral->setGerant("Moustapha");
        $clientMoral->setRaisonso("NVT");
        $clientMoral->setTelephone("338695252");
        $clientMoral->setNinea("N1258769");

        $clientmoraldb = new ClientMoralDB();
        $ok=$clientmoraldb->addClientMoral($clientMoral);
       
        if ($ok !=null) {

            echo "client moral inséré!";


        } else{

            echo "erreur!!!";
        }

    }
}



?>