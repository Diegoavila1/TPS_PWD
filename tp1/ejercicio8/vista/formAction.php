<?php

include "../control/cinemos.php";

if($_POST){
    $edad = $_POST["edad"];
    $string = $_POST["selects"];
    $objCinemos = new cinemos($edad,$string);
    echo $objCinemos->calcularTarifa();


}