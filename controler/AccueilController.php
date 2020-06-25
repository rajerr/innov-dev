<?php
class AccueilController extends Controller{


    public  function __construct(){
        $this->folder="pages";
        $this->layout="layout";
     }

     public function index(){
        $this->view="accueil";
         $this->render();

    }

    public function etudiant(){

        if(isset($_GET['etudiant'])){
            $this->layout="layout";
            $this->view="etudiant";
            $this->render();    
        }else{
            $this->index();
        }
    }

    public function chambre(){
        if(isset($_GET['chambre'])){
            $this->layout="layout";
            $this->view="chambre";
            $this->render();    
        }else{
            $this->index();
        }
    }
}