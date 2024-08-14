<?php
/*
    <!--Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más 
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además 
    un mensaje que indique el tipo de estudios que posee y su sexo. -->
    
*/

include "../control/persona.php";


if($_GET){

    $sinEstudios = $_GET["sinEstudios"];
    $estudiosPrimarios = $_GET["estudiosPrimarios"];
    $estudioSecundarios = $_GET["estudioSecundarios"];

    $objPersona = new persona($sinEstudios,$estudiosPrimarios,$estudioSecundarios);

    if($objPersona->noTieneEstudios()){
        echo "no tiene ningun estudio";
    }

    if($objPersona->tieneEstudioPrimario()){
        echo "Tiene el primario terminado";
    }

    if($objPersona->tieneEstudioSecundario()){
        echo "Tiene el secundario terminado";
    }

}