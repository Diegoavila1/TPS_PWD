<?php

    include "../../control/verNumero.php";
    include "../../utiles/funciones.php";

    if($_GET){
        
        $datos = data_submitted();
        $obj = new verNumero();

        echo "<br>";
        echo $obj->numPositivoNegativo($datos);
        
    }else{
        echo "no ingreso nada";
    }

    echo "<a href='ejercicio1.php'>Enviar</a>";