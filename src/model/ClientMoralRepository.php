<?php
namespace src\model; 

use libs\system\Model; 
	
class ClientMoralRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getClientMoral($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientMoral')->find(array('id' => $id));
		}
	}
	
	public function addClientMoral($clientMoral)
	{
		if($this->db != null)
		{
			$this->db->persist($clientMoral);
			$this->db->flush();

			return $clientMoral->getId();
		}
	}
	
	public function listeClientMoral(){
		if($this->db != null)
		{
			return $this->db->getRepository("ClientMoral")->findAll();
		}
	}
	
}