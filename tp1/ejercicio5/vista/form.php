
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOSTRAP
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
<!--BOOSTRAP-->
 <!--BOOSTRAP-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../../style.css">
    <title>Tp 1 ejercicio 2</title>
</head>
<body style="font-family: arial">

<header class="navbar">
    <nav class="container-fluid d-flex rounded-bg shadow-lg">
      
    <div class=" d-flex justify-content-start ">
      <a class="navbar-brand" href="../../../index.html">
        <img src="https://cdn-icons-png.flaticon.com/512/8216/8216616.png" alt=""></a>


      <div class="dropdown me-2 mt-1">
        <button class="btn btn-primary btn dropdown-toggle " type="button" data-bs-toggle="dropdown">
          Practico 1
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="../../ejercicio1/vista/form.php">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="../../ejercicio2/vista/form.php">ejercicio 2</a></li>
          <li><a class="dropdown-item" href="../../ejercicio3/vista/form.php">ejercicio 3</a></li>
          <li><a class="dropdown-item" href="../../ejercicio4/vista/form.php">ejercicio 4</a></li>
          <li><a class="dropdown-item" href="../../ejercicio5/vista/form.php">ejercicio 5</a></li>
          <li><a class="dropdown-item" href="../../ejercicio6/vista/form.php">ejercicio 6</a></li>
          <li><a class="dropdown-item" href="../../ejercicio7/vista/form.php">ejercicio 7</a></li>
          <li><a class="dropdown-item" href="../../ejercicio8/vista/form.php">ejercicio 8</a></li>
        </ul>
      </div>

      <div class="dropdown me-2 mt-1">
        <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Practico 2
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="../../../tp2/ejercicio3/vista/form.php">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="../../../tp2/ejercicio4/vista/form.php">ejercicio 2</a></li>
        </ul>
      </div>

      <div class="dropdown me-2 mt-1">
        <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Practico 3
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="../../../tp3/ejercicio1/vista/form.php">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="../../../tp3/ejercicio2/vista/form.php">ejercicio 2</a></li>
        </ul>
      </div>
      </div>
      <div class="justify-content-end m-1 p-2"> 
      <img src="../imagenes/pedco.jpg" alt="">
      <img src="../imagenes/githubLogo.p" alt="">
     </div>
    
    </nav>
    

  </header>
  
 <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

           <div class="row ">

            <div class="col">
                  <!---->
                <h1>Consigna: 5</h1>
                <p>
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo. </p>
            </div>
        </div>

        <div class="row  mt-5">
            <div class="col">
                <h1>Resolucion:</h1>
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
                </div>
        </div>

        <div class="row  mt-5">
            <div class="col">
                <img src="imagenes/dos.png" alt="" style="width: 50%;">
            </div>
        </div>


        </div>


        
 </main>

 <footer class="container-fluid d-flex justify-content-between bg-dark shadow-lg ">

<div class="row text-light">
  <ul class="" style="list-style-type: none; padding-left: 60px; margin-top:14% ; margin-bottom:14%;">
    <li>Diego Rios</li>
    <li>Miguel Soto</li>
    <li>Juan Cruz Geslowski </li>
    <li>Barquito </li>

  </ul>
</div>

<div class="row" style="margin-right: 50px; margin-top:10px;">
  <div class="col">
    <p class="text-light mt-5">Programacion Web Dinamica 2024 @</p>
  </div>

</div>
</footer>

</body>
</html>
