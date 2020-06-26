<?php
class ChambreController extends Controller{
    public  function __construct(){
        $this->layout="layout";
        $this->validator=new Validator();
     }

     public function index(){
        $this->view="chambre";
        $this->layout="layout";
         $this->render();

    }

    public function ajouter(){
            $this->view="savechambre";
            $this->render();
        if(isset($_POST['enregistrer'])){
            extract($_POST);
            $this->dao= new ChambreDao();
            $this->validator->isVide($type, "type", "veuillez selectionner un type");
            $this->validator->isVide($num_batiment, "num_batiment", "veuillez szlzctionner un batiment");
            if($this->validator->isValide()){
                    $obj=$this->dao->add($obj);
                    if($obj == null){
                        echo"0 ligne a été enrégistré";
                    }else{
                        echo"une chambre a été enrégistrée";
                    }
            }else{
                echo "une erreur est survenue lors de l'enrégistrement";
                    die();
            }
        }
    
    
}

}