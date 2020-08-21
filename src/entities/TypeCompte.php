<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="typecompte")
 **/
class TypeCompte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    

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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        
    }
}
