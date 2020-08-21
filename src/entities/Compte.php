<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $numero;
    /** @Column(type="string") **/
    private $cleRib;
    /** @Column(type="string") **/
    private $solde;
    /** @Column(type="string") **/
    private $dateOuverture;
    /** @Column(type="string") **/
    private $typefrais;
     /** @Column(type="string") **/
     private $typeCompte;
    /**
     * @ManyToOne(targetEntity="ClientMoral", inversedBy="comptes")
     * @JoinColumn(name="clientMoral_id", referencedColumnName="id")
     */
    private $clientMoral;
    /**
     * @ManyToOne(targetEntity="ClientPhysique", inversedBy="comptes")
     * @JoinColumn(name="clientPhysique_id", referencedColumnName="id")
     */
    private $clientPhysique;
   

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
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        
    }

    /**
     * Get the value of cleRib
     */ 
    public function getCleRib()
    {
        return $this->cleRib;
    }

    /**
     * Set the value of cleRib
     
     */ 
    public function setCleRib($cleRib)
    {
        $this->cleRib = $cleRib;

        
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        
    }

    /**
     * Get the value of dateOuverture
     */ 
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * Set the value of dateOuverture
     
     */ 
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;

        
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
     * Get the value of clientPhysique
     */ 
    public function getClientPhysique()
    {
        return $this->clientPhysique;
    }

    /**
     * Set the value of clientPhysique
     
     */ 
    public function setClientPhysique($clientPhysique)
    {
        $this->clientPhysique = $clientPhysique;

        
    }

    /**
     * Get the value of typeCompte
     */ 
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    /**
     * Set the value of typeCompte
     
     */ 
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;

        
    }

    /**
     * Get the value of typefrais
     */ 
    public function getTypefrais()
    {
        return $this->typefrais;
    }

    /**
     * Set the value of typefrais
     
     */ 
    public function setTypefrais($typefrais)
    {
        $this->typefrais = $typefrais;

        
    }
}
