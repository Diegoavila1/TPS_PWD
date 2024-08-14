<?php

class mayorEdad{
    private $edad;

	public function __construct($edad) {

		$this->edad = $edad;
	}

	public function getEdad() {
		return $this->edad;
	}

	public function setEdad($value) {
		$this->edad = $value;
	}

    public function edadMayor(){
        $esMayorEdad = false;
        if($this->getEdad() > 17){
            $esMayorEdad = true;
        }
        return $esMayorEdad;
    }

}