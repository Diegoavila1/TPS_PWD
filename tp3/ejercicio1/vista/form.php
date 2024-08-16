<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!---Ejercicio 1 – Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
    controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
    máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
    cargado, en caso contrario mostrar un mensaje indicando el problema. 
    
    Ejercicio 2 – Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
contenido en un textarea.
(OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php)  -->

<div class="container container-md mt-5 w-75 h-75 d-flex">
    <form method="POST" action="action/subirArchivo.php" enctype="multipart/form-data">
    Ingresa el archivo: <input type="file" name="miArchivo" id="miArchivo" />
    <input type="submit" value="Subir archivo" />
    </form>
</div>
</body>
</html>