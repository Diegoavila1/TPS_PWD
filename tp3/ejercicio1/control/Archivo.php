<?php

class Archivo{
    private $dir;
    public function __construct(){
        $this->dir = "../../archivos/";
    }

    public function getDir(){
        return $this->dir;
    }

    public function setDir($dir){
        $this->dir = $dir;
    }

    public function subirArchivo($array){
        $respuesta = "";
        if ($array['miArchivo']['error'] <= 0) {
           if(!copy($array['miArchivo']['tmp_name'], $this->getDir() . $array['miArchivo']['name'])){
               $respuesta = 0; //"ERROR: no se pudo cargar el archivo ";
           } else {
                $respuesta = 1; //"El archivo " . $array['miArchivo']["name"] . " se ha copiado con Éxito <br />";
           }
        } else {
            $respuesta = -1;  //"ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }
        return $respuesta;
    }
}