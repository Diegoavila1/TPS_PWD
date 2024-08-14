<?php

    include "../control/horasCursadas.php";

    if($_GET){
        
        $dato1 = $_GET["jueves"];
        $dato2 = $_GET["viernes"];
        $datos = [$dato1,$dato2];

        $obj = new horasCursadas($datos);
        echo "<br>";
        echo "Las cantidad de horas catedra son :".$obj->mostrarHorasCatedra();
        
    }else{

        echo "no ingreso nada";

    }

    echo "<a href='ejercicio1.php'>Enviar</a>"

?>
