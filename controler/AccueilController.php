<?php
class AccueilController extends Controller{


    public  function __construct(){
        $this->layout="layout";
     }

     public function index(){
        $this->view="accueil";
         $this->render();

    }

}