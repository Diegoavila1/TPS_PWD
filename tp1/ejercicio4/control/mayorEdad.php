<?php

class mayorEdad{
    private $edad;

	public function __construct() {
	}

    public function edadMayor($datos){
		$edad = $datos["edad"];

        $string = "soy menor de edad";
        if($edad > 17){
            $string = "soy mayor de edad";
        }
        return $string;
    }

}