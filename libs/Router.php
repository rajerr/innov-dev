<?php

class Router{
    
 private $ctrl;
 
    function route(){

        try{
            spl_autoload_register(function($class){
                $pathModels="./models/".$class.".php";
                $pathDao="./dao/".$class.".php";
                $pathLibs="./libs/".$class.".php";
                if(file_exists($pathModels)){
                    require_once( $pathModels);
                }elseif(file_exists($pathDao)){
                    require_once($pathDao); 
                }elseif(file_exists( $pathLibs)){
                 require_once( $pathLibs); 
             }     
             });


             if(isset($_GET['url'])){
                $url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL));
                  //Classe Controller
                  $ctrl= ucfirst(strtolower($url[0]))."Controller";
                  $pathCtrl="./controller/".$ctrl.".php";
                    if(file_exists($pathCtrl)){
                        require_once($pathCtrl);
                        //Instancier un Objet Controller
                        $this->ctrl=new $ctrl();
                        $action=$url[1];
                        if(method_exists($this->ctrl, $action)){
                          //Action Existe dans le Controller
                           $this->ctrl->{$action}();
                        }else{
                         //Action n'Existe pas dans le Controller
                          $pathCtrl="./controller/ErreurController.php";
                          require_once($pathCtrl);
                          $erreurCtrl=new ErreurController();
                          $erreurCtrl->showError("Cette Methode   n'existe Pas");
                        }
                        
                    }
             }else{
                $pathCtrl="controler/AccueilController.php";
                require_once($pathCtrl);
                $this->ctrl=new AccueilController();
                $this->ctrl->index();
             }
             
        }catch(Exception $ex){
        }
       
    }
}