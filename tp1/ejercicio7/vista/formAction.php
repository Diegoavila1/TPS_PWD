<?php

include "../control/calculadora.php";
include "../Utiles/funciones.php";

if($_GET){

    $datos = data_submitted();

    $objCalculadora = new calculadora();
    
    echo $objCalculadora->calcular($datos);

}