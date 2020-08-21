<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="clientMoral")
 **/
class ClientMoral
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $raisonSocial;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
    private $telephone;

    /**
     * @OneToMany(targetEntity="ClientPhysique", mappedBy="clientMoral")
     */
    private $clientPhysiques;
    /**
     * @OneToMany(targetEntity="Compte", mappedBy="clientMoral")
     */
    private $comptes;

    public function __construct()
    {
        $this->clientPhysiques = new ArrayCollection();
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
     * Get the value of raisonSocial
     */
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * Set the value of raisonSocial
     */
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;
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
     * Get the value of clientPhysiques
     */ 
    public function getClientPhysiques()
    {
        return $this->clientPhysiques;
    }

    /**
     * Set the value of clientPhysiques
     */ 
    public function setClientPhysiques($clientPhysiques)
    {
        $this->clientPhysiques = $clientPhysiques;
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
