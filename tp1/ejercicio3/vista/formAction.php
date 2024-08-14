<?php

    include "../control/persona.php";

    if($_POST){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $direccion = $_POST["direccion"];
        $objPersona = new persona($nombre, $apellido, $edad, $direccion);

        echo "Hola, yo soy {$objPersona->getNombre()} , {$objPersona->getApellido()} tengo {$objPersona->getEdad()} años y vivo en {$objPersona->getDireccion()}";
        
    }else{

        echo "";

    }

    if($_GET){
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $edad = $_GET["edad"];
        $direccion = $_GET["direccion"];
        $objPersona = new persona($nombre, $apellido, $edad, $direccion);

        echo "Hola, yo soy {$objPersona->getNombre()} , {$objPersona->getApellido()} tengo {$objPersona->getEdad()} años y vivo en {$objPersona->getDireccion()}";
    }else{

        echo "";

    }



?>
