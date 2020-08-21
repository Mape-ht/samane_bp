<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="clientPhysique")
 **/
class ClientPhysique
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
    private $telephone;
    /** @Column(type="string") **/
    private $statut;
    /** @Column(type="string", nullable=true) **/
    private $salaire;
    /**
     * @ManyToOne(targetEntity="ClientMoral", inversedBy="clienPhysiques")
     * @JoinColumn(name="clientMoral_id", referencedColumnName="id")
     */
    private $clientMoral;
    /**
     * @OneToMany(targetEntity="Compte", mappedBy="clientPhysique")
     */
    private $comptes;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * Get the value of clientMoral
     */ 
    public function getClientMoral()
    {
        return $this->clientMoral;
    }

    /**
     * Set the value of clientMoral
     */ 
    public function setClientMoral($clientMoral)
    {
        $this->clientMoral = $clientMoral;
    }

    /**
     * Get the value of comptes
     */ 
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * Set the value of comptes
     */ 
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }
}
