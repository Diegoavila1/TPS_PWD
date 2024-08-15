<?php

    include "../control/vernumero.php";

    if($_GET){
        
        $dato = $_GET["numero"];
        $obj = new vernumero($dato);

        echo "<br>";
        echo $obj->numPositivoNegativo($dato);
    }else{
        echo "no ingreso nada";
    }

    echo "<a href='ejercicio1.php'>Enviar</a>"

?>

