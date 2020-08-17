<?php
namespace src\model;
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
}

?>