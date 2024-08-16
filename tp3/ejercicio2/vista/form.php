

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!---/**Ejercicio 2 – Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
    que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
    contenido en un textarea.
    (OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php)  */ --->
</head>
<body>
    <form method="POST" action="../action/subirArchivo.php" enctype="multipart/form-data">
        Ingresa el archivo: <input type="file" name="miArchivo" id="miArchivo" />
        <input type="submit" value="Subir archivo" />
    </form>
</body>
</html>