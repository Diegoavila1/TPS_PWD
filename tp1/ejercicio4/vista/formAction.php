<?php

include "../control/mayorEdad.php";
include "../Utiles/funciones.php";

if($_GET){

    $datos = data_submitted();

    $objEdad = new mayorEdad();
    echo $objEdad->edadMayor($datos);

}else{
    echo "no ingreso nada";
}