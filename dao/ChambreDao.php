<?php
class ChambreDao extends Manager{
    public function __construct(){
        $this->tableName="chambres";
        $this->className="Chambre";
        
    }

    public function add($obj){
        $sql="INSERT INTO $this->tableName(num_chambre, type, num_batiment) VALUES(:num_chambre, :type, :num_batiment)";
            return $this->executeUpdate($sql, $obj);
  
    }
    public function update($obj){

    }
}