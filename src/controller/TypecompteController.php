<?php
namespace src\controller;


use src\model\TypecompteDB;
use src\entities\Typecompte;


class TypeCompteController{


    public function addTypeCompte(){


        $typecompte = new Typecompte();
        $typecompte->setLibelle("Compte Epargne","Compte Courant","Compte Bloqué");
        

        $typecompteDb = new TypecompteDB();
        $ok=$typecompteDb->addTypeFrais($typecompte);

        if ($ok !=null) {

            echo "type compte inséré!";


        } else{

            echo "erreur!!!";
        }
    }
}

?>