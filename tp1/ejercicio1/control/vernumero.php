<?php

class vernumero{

    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function  getNumero(){
        return $this->numero;
    }

    public function setNumero($num){
        $this->numero = $num;
    }
    
    public function mostrarNum(){

        if($this->getNumero() > 0){
            $mensaje = "El numero {$this->getNumero()} es positivo";
        }elseif($this->getNumero() < 0){
            $mensaje = "El numero {$this->getNumero()} es negativo"; 
        }else{
            $mensaje = "El numero {$this->getNumero()} es cero";
        }
        return $mensaje;
    }

}