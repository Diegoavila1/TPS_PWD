<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más 
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además 
    un mensaje que indique el tipo de estudios que posee y su sexo. -->

    <form action="formAction.php" method="get">
        Nombre : <input type="text" name="nombre" id="" style="display:block">
        Apellido : <input type="text" name="apellido" id="" style="display:block">
        Edad :<input type="number" name="edad" id="" style="display:block">
        Dirrecion : <input type="text" name="direccion" id="" style="display:block">

        <input type="radio" name="nivelEstudio" id="" value="sinEstudios">No tiene estudios
        <input type="radio" name="nivelEstudio" id="" value="estPrimario">Estudios primarios
        <input type="radio" name="nivelEstudio" id="" value="estSecundario">Estudios secundarios

        <br>

        <select name="genero" id="">
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
        </select>

        <input type="submit" name="" id="">

    </form>
</body>
</html>