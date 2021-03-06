<?php
namespace src\model;
use libs\system\Model;
require_once "./bootstrap.php";

class TypeFraisDB{


    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }


    public function addTypeFrais($typefrais){


        $this->db->persist($typefrais);
        $this->db->flush();
        return $typefrais->getId();
    }


    public function getTypeFrais($id){


        $db = connexion();
        return $db->getRepository('TypeFrais')->find($id);
    }

}

?>