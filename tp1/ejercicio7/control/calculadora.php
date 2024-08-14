<?php

class calculadora {
    private $numUno;
    private $numDos;
    private $string;

	public function __construct($numUno, $numDos, $string) {

		$this->numUno = $numUno;
		$this->numDos = $numDos;
		$this->string = $string;
	}

	public function getNumUno() {
		return $this->numUno;
	}

	public function setNumUno($value) {
		$this->numUno = $value;
	}

	public function getNumDos() {
		return $this->numDos;
	}

	public function setNumDos($value) {
		$this->numDos = $value;
	}

	public function getstring() {
		return $this->string;
	}

	public function setstring($value) {
		$this->string = $value;
	}

    public function calcular(){

        $calcula = 0;

        if($this->getstring() == "sumar"){
            $calcula = intVal($this->getNumUno()) + intVal($this->getNumDos());
        }

        if($this->getstring() == "restar"){
            $calcula = intVal($this->getNumUno()) - intVal($this->getNumDos());
        }

        if($this->getstring() == "multiplicar"){
            $calcula = intVal($this->getNumUno()) * intVal($this->getNumDos());
        }

        return $calcula;
    }

}