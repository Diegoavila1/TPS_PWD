<?php

    include "../control/horasCursadas.php";
    include "../Utiles/funciones.php";

    if($_GET){

        $datos = data_submitted();

        $dato1 = $_GET["jueves"];
        $dato2 = $_GET["viernes"];
        
        $obj = new horasCursadas($datos);
        echo "<br>";
        echo $obj->mostrarHorasCatedra($datos);
        
    }else{

        echo "no ingreso nada";

    }

    echo "<a href='ejercicio1.php'>Enviar</a>"

?>
