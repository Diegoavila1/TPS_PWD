<?php
class HorasCursadas{

    public function mostrarHorasCatedra($datos){
        $jueves = $datos["jueves"];
        $viernes = $datos["viernes"];

        $suma = $jueves + $viernes;
        $string =  "Las cantidad de horas catedra son : $suma";
        return $string;
    }
}