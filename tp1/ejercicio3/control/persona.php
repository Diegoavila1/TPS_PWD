<?php

class persona{

	public function __construct() {
	}

	public function descripcionPersona($datos){

		$nombre = $datos["nombre"];
		$apellido = $datos["apellido"];
		$edad = $datos["edad"];
		$direccion = $datos["direccion"];

		$string = "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion";
		return $string;	
		
	}
    
}