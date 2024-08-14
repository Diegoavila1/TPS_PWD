<?php
class horasCursadas{

    private $colHoras;

    public function __construct($colHoras) {
        $this->colHoras = $colHoras;
    }

    public function  getColHoras(){
        return $this->colHoras;
    }

    public function setHoras($horas){
        $this->colHoras = $horas;
    }

    public function mostrarHorasCatedra(){
        $suma = 0;
        foreach($this->getColHoras() as $hora){
            $suma += $hora;
        }
        return $suma;
    }

}