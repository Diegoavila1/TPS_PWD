<?php

class deportes{
    public function __construct() {
    }

    public function deporteRealizado($datos){
        $cantDeportesRealizados = 0;

        foreach($datos as $indice){
            if($indice !== null){
                $cantDeportesRealizados++;
            }
        }

        $string = "la cantidad de deportes que hace es : $cantDeportesRealizados";
        return $string;
        
        
    }
}