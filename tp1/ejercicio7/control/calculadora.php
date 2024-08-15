<?php

class calculadora {
	public function __construct() {
	}


    public function calcular($datos){

		$x = $datos["numUno"];
		$y = $datos["numDos"];
        $selects = $datos["selects"];

        $calcula = 0;

        if($selects == "sumar"){
            $calcula = intVal($x) + intVal($y);
        }

        if($selects == "restar"){
            $calcula = intVal($x) - intVal($y);
        }

        if($selects == "multiplicar"){
            $calcula = intVal($x) * intVal($y);
        }
		
		$mensaje = "Se realizo la operacion y como resulado dio : $calcula";
        return $mensaje;
    }

}