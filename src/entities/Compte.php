<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @ORM\Entity @ORM\Table(name="compte")
 **/

class Compte 
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $numerocompte;
    /** @ORM\Column(type="string") **/
    private $clerib;
    /**
     * One compte has many typefraiss. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Typefrais", mappedBy="compte")
     */
    private $typefraiss;
    /** @ORM\Column(type="decimal") **/
    private $depotinitial;
    /** @ORM\Column(type="string") **/
    private $datecrea;

    /**
     * @ORM\ManyToOne(targetEntity="ClientMoral", inversedBy="comptes")
     * @ORM\JoinColumn(name="clientMo_id", referencedColumnName="id")
     */
    private $clientmo;
    /**
     * @ORM\ManyToOne(targetEntity="ClientPhysique", inversedBy="comptes")
     * @ORM\JoinColumn(name="clientPhy_id", referencedColumnName="id")
     */
    private $clientPhy;
    /**
     * @ORM\ManyToOne(targetEntity="Typecompte", inversedBy="comptes")
     * @ORM\JoinColumn(name="typeCompte_id", referencedColumnName="id")
     */
    private $typecompte;


    public function __construct()
    {
        $this->typefraiss = new ArrayCollection();
    }

    
    public function getId(){

        return $this->id;
    }
    public function setId($id){

        $this->id = $id;
    }


    public function getNumerocompte(){

        return $this->numerocompte;
    }
    public function setNumerocompte($numerocompte){

        $this->numerocompte = $numerocompte;
    }

    
    public function getClerib(){

        return $this->clerib;
    }
    public function setClerib($clerib){

        $this->clerib = $clerib;
    }


    public function getTypefraiss(){

        return $this->typefraiss;
    }
    public function setTypefraiss($typefraiss){

        $this->typefraiss = $typefraiss;
    }


    public function getDepotinitial(){

        return $this->depotinitial;
    }
    public function setDepotinitial($depotinitial){

        $this->depotinitial = $depotinitial;
    }


    public function getDatecrea(){

        return $this->datecrea;
    }
    public function setDatecrea($datecrea){

        $this->datecrea = $datecrea;
    }


    public function getClientmo(){

        return $this->clientmo;
    }
    public function setClientmo($clientmo){

        $this->clientmo = $clientmo;
    }



    public function getClientPhy(){

        return $this->clientPhy;
    }
    public function setClientPhy($clientPhy){

        $this->clientPhy = $clientPhy;
    }


    public function getTypecompte(){

        return $this->typecompte;
    }
    public function setTypecompte($typecomptes){

        $this->typecompte = $typecomptes;
    }


}




?>