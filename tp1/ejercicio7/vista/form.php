<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 7</title>
</head>
<body>
    <!--Ejercicio 7 
    Crear una página con un formulario que contenga dos input de tipo text y un select. En 
    los inputs se ingresarán números y el select debe dar la opción de una operación 
    matemática que podrá resolverse usando los números ingresados. En la página que 
    procesa la información se debe mostrar por pantalla la operación seleccionada, cada 
    uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del 
    formulario: -->

        <form action="formAction.php" method="get">

            <input type="text" name="numUno" id="">
            <input type="text" name="numDos" id="">

            <select name="selects" id="">
                <option value="sumar">sumar</option>
                <option value="restar">restar</option>
                <option value="multiplicar">multiplicar</option>
            </select>
            <input type="submit" name="" id="">

        </form>

</body>
</html>