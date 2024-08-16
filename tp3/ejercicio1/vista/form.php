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
    cargado, en caso contrario mostrar un mensaje indicando el problema.  -->

<div class="container container-md ">
    <form method="$_FILES" action="subirArchivo.php" enctype="multipart/formdata">
    Ingresa el archivo: <input name="miArchivo" id="miArchivo" type="file" />
    </form>
    



</div>
    
</body>
</html>