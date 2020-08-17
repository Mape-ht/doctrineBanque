<?php
namespace src\model;
use libs\system\Model;
require_once "./bootstrap.php";


Class ClientMoralDB{


    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }

    public function addClientMoral($clientmo){


        $this->db->persist($clientmo);
        $this->db->flush();
        return $clientmo->getId();
    }


    public function getClientMoral($id){
        
        $db = connexion();
        return $db->getRepository('ClientMoral')->find($id);
    }



}




?>