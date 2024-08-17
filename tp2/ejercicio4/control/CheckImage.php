<?php

class CheckImage
{
    private $dir;
    public function __construct()
    {
        $this->dir = "../archivos/";
    }

    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir)
    {
        $this->dir = $dir;
    }
    public function verificaTipo($archivo)
    {
        return $archivo['archive']['type'] == 'image/jpg' || $archivo['archive']['type'] == 'image/jpeg' || $archivo['archive']['type'] == 'image/png';
    }

    public function subirArchivo($array)
    {
        $respuesta = "";
        if ($array['archive']['error'] <= 0) {
            if ($this->verificaTipo($array)) {
                if (!copy($array['archive']['tmp_name'], $this->getDir() . $array['archive']['name'])) {
                    $respuesta = 0; //"ERROR: no se pudo cargar el archivo";
                } else {
                    $respuesta = 1; //"El archivo " . $array['miArchivo']["name"] . " se ha copiado con Éxito <br />";
                }
            } else {
                $respuesta = -2; //"ERROR: no se pudo cargar el archivo. No es un archivo txt";
            }
        } else {
            $respuesta = -1;  //"ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }
        return $respuesta;
    }
}