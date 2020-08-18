<?php
namespace src\model;
use libs\system\Model;
require_once "./bootstrap.php";

class TypecompteDB{


    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }


    public function addTypecompte($typecompte){


        $this->db->persist($typecompte);
        $this->db->flush();
        return $typecompte->getId();
    }


    public function getTypecompte($id){


        $db = connexion();
        return $db->getRepository('Typecompte')->find($id);
    }
}

?>