<?php

if($_GET){

    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        // Verifica si se ha seleccionado al menos un radio button
        if (isset($_GET["futbol"]) || isset($_GET["basket"]) || isset($_GET["tennis"]) || isset($_GET["voley"])) {
            // Si se ha seleccionado al menos uno, procesa los valores
            $futbol = isset($_GET["futbol"]) ? $_GET["futbol"] : "";
            $basket = isset($_GET["basket"]) ? $_GET["basket"] : "";
            $tennis = isset($_GET["tennis"]) ? $_GET["tennis"] : "";
            $voley = isset($_GET["voley"]) ? $_GET["voley"] : "";
    
            // Realiza las operaciones necesarias con los valores
            echo $futbol;
            echo $basket;
            echo $tennis;
            echo $voley;
        } else {
            // Si no se ha seleccionado ninguno, muestra un mensaje de error
            echo "Por favor, selecciona al menos un deporte.";
        }
    }

} 