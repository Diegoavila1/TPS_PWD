<?php

/* 
-Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario  y la password para loguearse. 

-Realizar la validación de este formulario. Chequear no solo que se hayan cargado el 
usuario y la contraseña antes de ser enviados al servidor sino que también debe 
realizar un control de contraseña segura (La contraseña debe tener como mínimo 8 
caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener 
letras y números.*/


include "../utiles/funciones.php";
include "../control/control.php";


$datos = data_submitted();
$usuarios = [
    ["usuario" => "valentin", "clave" => "valentin12345678"],
    ["usuario" => "juancruz", "clave" => "juan87654321"],
    ["usuario" => "diegoavila", "clave" => "diego12345678"]
];

print_r($datos);
$objControl = new verificacion;
echo $objControl->comprobarUsuario($datos,$usuarios);