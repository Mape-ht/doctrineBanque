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
     * Many Compte have Many Typefrais.
     * @ORM\ManyToMany(targetEntity="TypeFrais")
     * @ORM\JoinTable(name="comptes_typefrais",
     *      joinColumns={@ORM\JoinColumn(name="compte_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="typeFrais_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $typefrais;
    /** @ORM\Column(type="string") **/
    private $datecrea;
    /** @ORM\Column(type="integer") **/
    private $solde;
     /**
     * Many comptes have one clientmo. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientMoral", inversedBy="comptes")
     * @ORM\JoinColumn(name="clientmo_id", referencedColumnName="id")
     */
    private $clientmo;
     /**
     * Many comptes have one clientPhy. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientPhysique", inversedBy="comptes")
     * @ORM\JoinColumn(name="clientPhy_id", referencedColumnName="id")
     */
    private $clientPhy;


    public function __construct()
    {
        // $this->typefrais = new \Doctrine\Common\Collections\ArrayCollection();
        // $this->clientmo = new ArrayCollection();
        // $this->clientPhy = new ArrayCollection();
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


    public function getTypefrais(){

        return $this->typefrais;
    }
    public function setTypefrais($typefrais){

        $this->typefrais = $typefrais;
    }


    public function getDatecrea(){

        return $this->datecrea;
    }
    public function setDatecrea($datecrea){

        $this->datecrea = $datecrea;
    }


    public function getSolde(){

        return $this->solde;
    }
    public function setSolde($solde){

        $this->solde = $solde;
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


}




?>