<?php

include "../utiles/funciones.php";
include "../control/control.php";

$datos = data_submitted();

$objPelicula = new peliculas;

echo $objPelicula->mostraPelicula($datos);