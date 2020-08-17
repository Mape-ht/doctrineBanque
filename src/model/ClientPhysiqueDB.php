<?php
namespace src\model;
use libs\system\Model;
require_once "./bootstrap.php";


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
        
        return $this->db->getRepository('ClientPhysique')->find($id);
    }
    public function getClientMoral($id){
        
        return $this->db->getRepository('ClientMoral')->find($id);
    }
    
}


?>