<?php

use libs\system\Controller;
use src\model\ClientPhysiqueRepository;
class ClientPhysiqueController extends Controller
{

    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/client/
     */
    public function index(){
            return $this->view->load("clientPhysique/add");
    } 

    public function add(){

        if(isset($_POST['ajouter'])){
            // var_dump($_POST);
            // die;
            extract($_POST);
            $clientPhysique = new ClientPhysique();

            $clientPhysique->setNom($nom);
            $clientPhysique->setPrenom($prenom);
            $clientPhysique->setAdresse($adresse);
            $clientPhysique->setTelephone($telephone);
            $clientPhysique->setStatut($statut);
            $clientPhysique->setSalaire($salaire);
            
            $clientPhysiqueRepository = new ClientPhysiqueRepository();
            $ok = $clientPhysiqueRepository->addClientPhysique($clientPhysique);
            if($ok!=null){
                $data['ok']=1;
                $data['clientPhysiques'] = $clientPhysiqueRepository->listeClientPhysique();
                $this->view->load('clientPhysique/add',$data);
            } else {
                
                $data['ok']=0;
                $this->view->load('clientPhysique/add',$data);
            }
            
        } else {
            return $this->view->load("clientPhysique/add");
        }
    }
     



}


?>