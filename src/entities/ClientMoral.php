<?php


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @ORM\Entity @ORM\Table(name="clientmoral")
 **/

class ClientMoral 
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $raisonso;
    /** @ORM\Column(type="string") **/
    private $gerant;
    /** @ORM\Column(type="string") **/
    private $adresse;
    /** @ORM\Column(type="string") **/
    private $telephone;
    /** @ORM\Column(type="string") **/
    private $ninea;
    /**
     * Many clientmorals have one compte. This is the owning side.
     * @ORM\OneToMany(targetEntity="Compte",mappedBy="clientMo")
     */
    private $compte;
    /** @ORM\Column(type="string") **/
    private$typeclt;
    


    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }

    public function getId(){

        return $this->id;
    }
    public function setId($id){

        $this->id = $id;
    }


    public function getRaisonso(){

        return $this->raisonso;
    }
    public function setRaisonso($raisonso){

        $this->raisonso = $raisonso;
    }

    
    public function getGerant(){

        return $this->gerant;
    }
    public function setGerant($gerant){

        $this->gerant = $gerant;
    }


    public function getAdresse(){

        return $this->adresse;
    }
    public function setAdresse($adresse){

        $this->adresse = $adresse;
    }


    public function getTelephone(){

        return $this->telephone;
    }
    public function setTelephone($telephone){

        $this->telephone = $telephone;
    }


    public function getNinea(){

        return $this->ninea;
    }
    public function setNinea($ninea){

        $this->ninea = $ninea;
    }


    public function getCompte(){

        return $this->compte;
    }
    public function setCompte($compte){

        $this->compte = $compte;
    }


    public function getTypeclt(){

        return $this->typeclt;
    }
    public function setTypeclt($typeclt){

        $this->typeclt = $typeclt;
    }

       
}




?>