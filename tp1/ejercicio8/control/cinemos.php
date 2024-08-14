<?php

class cinemos{
    private $edad;
    private $string;

	public function __construct($edad, $string) {

		$this->edad = $edad;
		$this->string = $string;
	}

	public function getEdad() {
		return $this->edad;
	}

	public function setEdad($value) {
		$this->edad = $value;
	}

	public function getString() {
		return $this->string;
	}

	public function setString($value) {
		$this->string = $value;
	}

    public function calcularTarifa(){

        $precio = 0;
        
        if($this->getString() == "estudiante" && intval($this->getEdad()) >= 12){
            $precio = 180;
        }elseif($this->getString() == "estudiante" || intval($this->getEdad()) < 12){
            $precio = 160;
        }else{
            $precio = 300;
        }

        return $precio;
    }
}