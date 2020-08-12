<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @ORM\Entity @ORM\Table(name="clientphysique")
 **/

class ClientPhysique 
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $nom;
    /** @ORM\Column(type="string") **/
    private $prenom;
    /** @ORM\Column(type="string") **/
    private $adresse;
    /** @ORM\Column(type="string") **/
    private $telephone;
    /** @ORM\Column(type="string") **/
    private $email;
    /** @ORM\Column(type="string") **/
    private $statut;
    /** @ORM\Column(type="string") **/
    private $salaire;
    /**
     * One ClientPhysique has One ClientMoral.
     * @ORM\OneToOne(targetEntity="ClientMoral")
     * @ORM\JoinColumn(name="clientMoral_id", referencedColumnName="id")
     */
    private $clientMoral;
    /** @ORM\Column(type="string") **/
    private $cin;
    /**
     * One clientPhy has many comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="clientPhy")
     */
    private $comptes;


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


    public function getNom(){

        return $this->nom;
    }
    public function setNom($nom){

        $this->nom = $nom;
    }

    
    public function getPrenom(){

        return $this->prenom;
    }
    public function setPrenom($prenom){

        $this->prenom = $prenom;
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


    public function getEmail(){

        return $this->email;
    }
    public function setEmail($email){

        $this->email = $email;
    }


    public function getStatut(){

        return $this->statut;
    }
    public function setStatut($statut){

        $this->statut = $statut;
    }


    public function getSalaire(){

        return $this->salaire;
    }
    public function setSalaire($salaire){

        $this->salaire = $salaire;
    }


    public function getClientMoral(){

        return $this->clientMoral;
    }
    public function setClientMoral($clientMoral){

        $this->clientMoral = $clientMoral;
    }


    public function getCin(){

        return $this->cin;
    }
    public function setCin($cin){

        $this->cin = $cin;
    }


    public function getComptes(){

        return $this->comptes;
    }
    public function setComptes($comptes){

        $this->comptes = $comptes;
    }

    
}


?>