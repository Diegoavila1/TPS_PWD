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
$datos = data_submitted();

if($_GET){
    $datos = data_submitted();
    
    $radio = $_GET["nivelEstudio"];
    $select = $_GET["genero"];
    
    if($radio == "estPrimario"){
        echo "Tiene estudios primario";
    }elseif($radio == "estSecundario"){
        echo "Tiene estudios secundarios";
    }else{
        echo "No tiene estudios";
    }

    if($select == "Femenino"){
        echo "Sexo : femenino";
    }elseif($select == "Masculino"){
        echo "Sexo : femenino";
    }


}