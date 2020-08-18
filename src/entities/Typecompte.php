<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/** 
 * @ORM\Entity @ORM\Table(name="typecompte")
 **/

class Typecompte
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $libelle;
    /**
     * Many typecomptes has One Compte.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="typecompte")
     */
    private$compte;


    public function __construct()
    {
        $this->compte = new ArrayCollection();
    }

    public function getId(){

        return $this->id;
    }
    public function setId($id){

        $this->id = $id;
    }


    public function getLibelle(){

        return $this->libelle;
    }
    public function setLibelle($libelle){

        $this->libelle = $libelle;
    }

    public function getCompte(){

        return $this->compte;
    }
    public function setCompte($compte){

        $this->compte = $compte;
    }

       
    
}

?>