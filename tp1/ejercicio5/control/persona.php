<?php

 class persona{
    public function __construct() {
    }

    public function nivelesEstudio($datos){

      $nivelesEstudio = $datos["nivelEstudio"];

      if($nivelesEstudio == "estPrimario"){
         $string = "Tiene estudios primario";
      }elseif($nivelesEstudio == "estSecundario"){
         $string = "Tiene estudios secundarios";
      }else{
         $string = "No tiene estudios";
      }

      return $string;
    } 

    public function tipoGenero($datos){
      $genero = $datos["genero"];


      if($genero == "Femenino"){
         $string = "Sexo : femenino";
      }else{
         $string = "Sexo : masculino";
      }

      return $string;
    }
 }