<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!--
        Crear una página php que contenga un formulario HTML que permita ingresar las horas 
        de cursada, de la materia Programación Web Dinámica, por cada día de la semana. 
        Enviar los datos del formulario por el método Get a otra página php que los reciba y 
        complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
        se cursan por semana.
    -->

    <form action="formAction.php" method="get">
        <label for="">Ingrese las horas de cursada de jueves:</label>
        <input type="" name="jueves" id="">
        <br>
        <label for="">Ingrese las horas de cursada de viernes:</label>
        <input type="" name="viernes" id="">
        <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>