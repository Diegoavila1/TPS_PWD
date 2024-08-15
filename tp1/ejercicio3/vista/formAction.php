<?php

    include "../control/persona.php";
    include "../Utiles/funciones.php";

    if($_POST){
        
        $datos = data_submitted();
        $objPersona = new persona($datos);

        echo $objPersona->descripcionPersona($datos);

    }else{
        echo "";
    }

    if($_GET){

        $datos = data_submitted();
        $objPersona = new persona($datos);

        echo $objPersona->descripcionPersona($datos);
    
    }else{
        echo "";
    }



?>
