<?php
namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->find(array('id' => $id));
		}
	}
	
	public function addCompte($compte)
	{
		if($this->db != null)
		{
			$this->db->persist($compte);
			$this->db->flush();

			return $compte->getId();
		}
	}
	
	public function listeCompte(){
		if($this->db != null)
		{
			return $this->db->getRepository("Compte")->findAll();
		}
	}

	// public function getClientPhysique($id)
	// {
	// 	if($this->db != null)
	// 	{
	// 		return $this->db->getRepository('ClientPhysique')->find(array('id' => $id));
	// 	}
	// }

	// public function getClientMoral($id)
	// {
	// 	if($this->db != null)
	// 	{
	// 		return $this->db->getRepository('ClientMoral')->find(array('id' => $id));
	// 	}
	// }
	public function getTypeCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('TypeCompte')->find(array('id' => $id));
		}
	}

	// public function listeClientPhysique(){
	// 	if($this->db != null)
	// 	{
	// 		return $this->db->getRepository("ClientPhysique")->findAll();
	// 	}
	// }
	// public function listeClientMoral(){
	// 	if($this->db != null)
	// 	{
	// 		return $this->db->getRepository("ClientMoral")->findAll();
	// 	}
	// }
	public function listeTypeClient(){
		if($this->db != null)
		{
			return $this->db->getRepository("TypeClient")->findAll();
		}
	}
	
}