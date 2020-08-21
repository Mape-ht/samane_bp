<?php
namespace src\model; 

use libs\system\Model; 
	
class ClientPhysiqueRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getClientPhysique($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientPhysique')->find(array('id' => $id));
		}
	}
	
	public function addClientPhysique($clientPhysique)
	{
		if($this->db != null)
		{
			$this->db->persist($clientPhysique);
			$this->db->flush();

			return $clientPhysique->getId();
		}
	}

	public function listeClientPhysique(){
		if($this->db != null)
		{
			return $this->db->getRepository("ClientPhysique")->findAll();
		}
	}
	// public function getClientMoral($id)
	// {
	// 	if($this->db != null)
	// 	{
	// 		return $this->db->getRepository('ClientMoral')->find(array('id' => $id));
	// 	}
	// }
	// public function listeClientMoral(){
	// 	if($this->db != null)
	// 	{
	// 		return $this->db->getRepository("ClientMoral")->findAll();
	// 	}
	// }
	
}