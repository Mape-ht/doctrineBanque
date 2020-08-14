<?php

use Doctrine\ORM\Mapping as ORM;


/** 
 * @ORM\Entity @ORM\Table(name="typefrais")
 **/

class TypeFrais
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $frais;
    /** @ORM\Column(type="integer") **/
    private $montant;
   


    public function __construct()
    {
        
    }

    public function getId(){

        return $this->id;
    }
    public function setId($id){

        $this->id = $id;
    }


    public function getFrais(){

        return $this->frais;
    }
    public function setFrais($frais){

        $this->frais = $frais;
    }

    
    public function getMontant(){

        return $this->montant;
    }
    public function setMontant($montant){

        $this->montant = $montant;
    }

    
}

?>