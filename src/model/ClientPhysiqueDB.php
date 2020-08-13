<?php

Class ClientPhysiqueDB{


    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }

    public function addClientPhysique($clientphysique){

        $this->db->persist($clientphysique);
        $this->db->flush();
        return $clientphysique->getId();
    }

    

    public function getClientPhysique($id){
        
        $db = connexion();
        return $db->getRepository('ClientPhysique')->find($id);
    }
    
}


?>