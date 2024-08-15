<?php

class cinemos{

	public function __construct() {
	}

    public function calcularTarifa($datos){

		$edad = $datos["edad"];
		$select = $datos["selects"];
		
        $precio = 0;
        
        if($select == "estudiante" && intval($edad) >= 12){
            $precio = 180;
        }elseif($select == "estudiante" || intval($edad) < 12){
            $precio = 160;
        }else{
            $precio = 300;
        }

		$string = "Su boleto cuesta : $precio";
        return $string;
    }
}