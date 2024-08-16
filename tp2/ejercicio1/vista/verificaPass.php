<?php

/* 
-Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario  y la password para loguearse. 

-Los datos del formulario son enviados a un script verificaPass.php
 en el que contienen un arreglo asociativo por cada usuario del sistema. 
 
-El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
y en caso contrario un mensaje de error.*/


include "../utiles/funciones.php";
include "../control/control.php";

$datos = data_submitted();

$objControl = new verificacion;
echo $objControl->comprobarUsuario($datos);

