<?php
namespace src\model;
require_once "./bootstrap.php";


Class CompteDB{

    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }


    public function addCompte($compte){
        
        $this->db->persist($compte);
        $this->db->flush();
        return $compte->getId();
    }

    public function getClientMoral($id){
        
        return $this->db->getRepository('ClientMoral')->find($id);
    }

    public function getClientPhysique($id){
        
        return $this->db->getRepository('ClientPhysique')->find($id);
    }
} 


?>