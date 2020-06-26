<?php

class EtudiantDao extends Manager{

    public function __construct(){
        $this->tableName="etudiants";
        $this->className="Etudiant";
    }

    public function findAll(){
        $sql="select * from $this->tableName";
        $data=$this->executeSelect($sql);
        var_dump($data);
      }
}