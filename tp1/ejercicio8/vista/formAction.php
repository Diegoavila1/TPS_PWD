<?php

include "../control/cinemos.php";
include "../Utiles/funciones.php";

if($_POST){


    $datos = data_submitted();

    $objCinemos = new cinemos();
    echo $objCinemos->calcularTarifa($datos);
    echo "<button><a href='form.php'>Volver</a></button>";
    
}