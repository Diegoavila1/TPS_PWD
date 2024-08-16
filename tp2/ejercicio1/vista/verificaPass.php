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

echo "1. Datos recibidos: <br>";

$datos = data_submitted();
echo "2. Datos recibidos: <br>";
$usuarios = [
    ["usuario" => "valentin", "clave" => "valentin12345678"],
    ["usuario" => "juancruz", "clave" => "juan87654321"],
    ["usuario" => "diegoavila", "clave" => "diego12345678"]
];
echo "3. Datos recibidos: <br>";
$objControl = new verificacion;
echo "4. Datos recibidos: <br>";
echo $objControl->comprobarUsuario($datos,$usuarios);