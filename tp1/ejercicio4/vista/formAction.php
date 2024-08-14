<?php

include "../control/mayorEdad.php";

if($_GET){

    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $edad = $_GET["edad"];
    $direccion = $_GET["direccion"];
    
    $objEdad = new mayorEdad($edad);

    if($objEdad->edadMayor($edad)){
        echo "Soy mayor de de edad";
    }else{
        echo "Soy menor de edad";
    }

}else{

    echo "";

}