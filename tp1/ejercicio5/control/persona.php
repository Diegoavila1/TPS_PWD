<?php

class persona{
    private $estudios1;
    private $estudios2;
    private $estudios3;

	public function __construct($estudios1, $estudios2, $estudios3) {

		$this->estudios1 = $estudios1;
		$this->estudios2 = $estudios2;
		$this->estudios3 = $estudios3;
	}

	public function getEstudios1() {
		return $this->estudios1;
	}

	public function setEstudios1($value) {
		$this->estudios1 = $value;
	}

	public function getEstudios2() {
		return $this->estudios2;
	}

	public function setEstudios2($value) {
		$this->estudios2 = $value;
	}

	public function getEstudios3() {
		return $this->estudios3;
	}

	public function setEstudios3($value) {
		$this->estudios3 = $value;
    }

    public function noTieneEstudios(){

        $boleano = false;
        if($this->getEstudios1() == "on"){
            $boleano = true;
        }
        return $boleano;

    }

    public function tieneEstudioPrimario(){
        
        $boleano = false;
        if($this->getEstudios2() == "on"){
            $boleano = true;
        }
        return $boleano;

    }

    
    public function tieneEstudioSecundario(){
        
        $boleano = false;
        if($this->getEstudios3() == "on"){
            $boleano = true;
        }
        return $boleano;

    }
}