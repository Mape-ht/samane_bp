<?php

use libs\system\Controller;
use src\model\CompteRepository;

class CompteController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/client/
     */

    public function add(){

        if(isset($_POST['ajouter'])){
            // var_dump($_POST);
            // die;
            extract($_POST);
            $compte = new Compte();

            $compte->setNumero($numero);
            $compte->setCleRib($cleRib);
            $compte->setSolde($solde);
            $compte->setDateOuverture($dateOuverture);
            $compte->setTypefrais($typefrais);
            $compte->setTypeCompte($typeCompte);
            
            
            $compteRepository = new CompteRepository();
            $ok = $compteRepository->addCompte($compte);
            if($ok!=null){
                $data['ok']=1;
                $data['comptes'] = $compteRepository->listeCompte();
                $this->view->load('compte/add',$data);
            } else {
                
                $data['ok']=0;
                $this->view->load('compte/add',$data);
            }
            
        } else {
            return $this->view->load("compte/add");
        }
    }
     
    
    }

?>