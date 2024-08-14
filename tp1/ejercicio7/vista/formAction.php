<?php

include "../control/calculadora.php";


if($_GET){

    $string = $_GET["selects"];
    $numUno = $_GET["numUno"];
    $numDos = $_GET["numDos"];

    $objCalculadora = new calculadora($numUno,$numDos,$string);
    
    echo "Se realizo la operacion y como resulado dio : {$objCalculadora->calcular()}";

}