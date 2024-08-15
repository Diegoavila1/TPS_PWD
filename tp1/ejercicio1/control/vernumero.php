<?php

class vernumero{

    public function __construct() {
    }

    
    public function numPositivoNegativo($datos){
        $num = $datos["num"];

        if($num > 0){
            $mensaje = "El numero $num es positivo";
        }elseif($num < 0){
            $mensaje = "El numero $num es negativo"; 
        }else{
            $mensaje = "El numero $num es cero";
        }
        return $mensaje;
    }

}