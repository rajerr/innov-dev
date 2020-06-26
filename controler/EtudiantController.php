<?php
class EtudiantController extends Controller{


    public  function __construct(){
        $this->layout="layout";
     }

     public function index(){
        $this->view="etudiant";
         $this->render();

    }

    public function ajouter(){
        $this->view="saveetudiant";
         $this->render();
    }

    public function info(){
        $this->view="infoetudiant";
        $this->render();
    }

}