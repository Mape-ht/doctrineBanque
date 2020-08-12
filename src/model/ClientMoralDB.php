<?php



Class ClientMoralDB{


    public function addClientMoral($clientmo){


        $db = connexion();
        $db->persist($clientmo);
        $db->flush();
        return $clientmo->getId();
    }



}




?>