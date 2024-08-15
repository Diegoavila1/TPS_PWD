<?php
/*
    <!--Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más 
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además 
    un mensaje que indique el tipo de estudios que posee y su sexo. -->
    
*/

include "../control/persona.php";
include "../Utiles/funciones.php";

if($_GET){

    $datos = data_submitted();
    $objPersona = new persona;
    echo $objPersona->nivelesEstudio($datos);
    echo $objPersona->tipoGenero($datos);
    
}