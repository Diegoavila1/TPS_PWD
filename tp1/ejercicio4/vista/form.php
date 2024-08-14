<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <!--Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar 
    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la 
    persona es mayor de edad o no; (si la edad es mayor o igual a 18). 
    Enviar los datos usando el método GET y luego probar de modificar los datos 
    directamente en la url para ver los dos posibles mensajes.-->

    <form action="formAction.php" method="get">
        Nombre : <input type="text" name="nombre" id="" style="display:block">
        Apellido : <input type="text" name="apellido" id="" style="display:block">
        Edad :<input type="number" name="edad" id="" style="display:block">
        Dirrecion : <input type="text" name="direccion" id="" style="display:block">
        <input type="submit" name="" id="">
    </form>
</body>
</html>