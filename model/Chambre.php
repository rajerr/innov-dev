<?php

class Chambre implements IGestion{
    private $numero;
    private $type;
    private $numBatiment;


    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
   
    public  function hydrate($row){
       $this->numero=$row['numero']; 
       $this->type=$row['type']; 
       $this->numBatiment=$row['numBatiment']; 
    }

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}

	public function getNumBatiment() {
		return $this->numBatiment;
	}

	public function setNumBatiment( $numBatiment) {
		$this->numBatiment = $numBatiment;
	}

}