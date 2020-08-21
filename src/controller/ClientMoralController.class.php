<?php

use libs\system\Controller;
use src\model\ClientMoralRepository;

class ClientMoralController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/client/
     */
    public function index(){
        return $this->view->load("clientMoral/add");
    } 

    public function add(){

        if(isset($_POST['ajouter'])){
            // var_dump($_POST);
            // die;
            extract($_POST);
            $clientMoral = new ClientMoral();

            $clientMoral->setRaisonSocial($raisonSocial);
            $clientMoral->setNom($nom);
            $clientMoral->setAdresse($adresse);
            $clientMoral->setTelephone($telephone);

            $clientMoralRepository = new ClientMoralRepository();
            $ok = $clientMoralRepository->addClientMoral($clientMoral);
            if($ok!=null){
                $data['ok']=1;
                $data['clientMorals'] = $clientMoralRepository->listeClientMoral();
                $this->view->load('clientMoral/add',$data);
            } else {
                
                $data['ok']=0;
                $this->view->load('clientMoral/add',$data);
            }
            
        } else {
            return $this->view->load("clientMoral/add");
        }
    }
     
    
    }

?>