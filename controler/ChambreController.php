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
        if(isset($_POST['num_chambre']) && isset($_POST['type']) && isset($_POST['num_batiment'])){
            extract($_POST);
            $this->dao= new ChambreDao();
            $this->validator->isVide($num_chambre, "num_chambre", "veuillez remplir ce champ");
            $this->validator->isVide($type, "type", "veuillez selectionner un type");
            $this->validator->isVide($num_batiment, "num_batiment", "veuillez selectionner un batiment");
            if($this->validator->isValid()){
                    $add=$this->dao->add($_POST);
                    if($add <= 0){
                        $this->data_view["error"]="0 ligne a été enrégistré";
                    }else{
                        $this->data_view["error"]="une chambre a été enrégistrée";
                        $this->index();
                    }
            }else{
                $this->data_view["error"]= $this->validator->getErrors();
                $this->index();
            }
        }
}


}