<?php

include "../control/deportes.php";

if($_GET){

    include "../Utiles/funciones.php";
    $datos = data_submitted();
    $objDeporte = new deportes;

    echo $objDeporte->deporteRealizado($datos);
} 