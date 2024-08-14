<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3</title>
</head>
<body>
    
    <!--
        Crear una página php que contenga un formulario HTML como el que se indica en la 
        imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php 
        que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy 
        nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida. 
        Cambiar el método Post por Get y analizar las diferencias
    -->

    <div style="margin:auto">
    <h1>POST</h1>

    <form action="formAction.php" method="post">
        Nombre : <input type="text" name="nombre" id="" style="display:block">
        Apellido : <input type="text" name="apellido" id="" style="display:block">
        Edad :<input type="number" name="edad" id="" style="display:block">
        Dirrecion : <input type="text" name="direccion" id="" style="display:block">

    </form>

    <h1>GET</h1>
    <form action="formAction.php" method="get">
        Nombre : <input type="text" name="nombre" id="" style="display:block">
        Apellido : <input type="text" name="apellido" id="" style="display:block">
        Edad :<input type="number" name="edad" id="" style="display:block">
        Dirrecion : <input type="text" name="direccion" id="" style="display:block">
        <button type="submit">Enviar</button>
    </form>
    </div>


</body>
</html>