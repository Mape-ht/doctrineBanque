<?php
namespace src\controller;


use src\model\TypeFraisDB;
use src\entities\TypeFrais;

class TypeFraisController{


    public function addTypeFrais(){


        $typefrais = new TypeFrais ();
        $typefrais->setFrais("Frais ouverture","Agios","Frais blocage");
        $typefrais->setMontant("10000","2000","25000");

        $typefraisDb = new TypeFraisDB();
        $ok=$typefraisDb->addTypeFrais($typefrais);

        if ($ok !=null) {

            echo "type frais inséré!";


        } else{

            echo "erreur!!!";
        }
    }
}

?>