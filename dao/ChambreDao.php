<?php
class ChambreDao extends Manager{
    public function __construct(){
        $this->tableName="chambres";
        $this->className="Chambre";
        
    }

    public function add($obj){
        $sql="INSERT INTO $this->tableName(numero, type, num_batiment) VALUES(numero, type, num_batiment)";
            return $this->executeUpdate($sql);
  
    }
}