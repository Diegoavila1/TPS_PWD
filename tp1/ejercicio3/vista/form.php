
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

    <link rel="stylesheet" href="../../../style.css?v=2.2">
    <title>Tp 1 ejercicio 3</title>
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
        <img src="../../../imagenes/pedco.jpg" alt="">
        <img src="../../../imagenes/githubLogo.png" alt="">
      </div>

    </nav>
        
  </header>

      <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

                    
      <div class="row ">
            <div class="col" id="content">
                <h1>Consigna: 3</h1>
                <p>
                    Crear una página php que contenga un formulario HTML como el que se indica en la
                    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                    Cambiar el método Post por Get y analizar las diferencias </p>
            </div>
      </div>

        <div class="row mt-5">
                
                <div class="row" id="contenedor"  style="width: 3000px;" >
               
                  <div class="col" id="post">
                    <form action="action/formAction.php" method="post" id="formulario1">
                        <h1 style="text-align: center;">POST</h1>
                        <label for="">Nombre :</label><br>
                        <input class="form-control ancho-input" type="text" name="nombre" id="" style="display:block" placeholder="Nombre">
                        <label for="">Apellido : </label><br>
                        <input class="form-control ancho-input" type="text" name="apellido" id="" style="display:block" placeholder="Apellido">
                        <label for="">Edad :</label><br>
                        <input class="form-control ancho-input" type="number" name="edad" id="" style="display:block" placeholder="Edad">
                        <label for="">Direcion :</label><br>
                        <input class="form-control ancho-input" type="text" name="direccion" id="" style="display:block" placeholder="Direccion">
                        <button type="submit" class="boton" >Enviar</button>
                    </form>
                  </div>
                  
                  <div class="col" id="get">
                    <form action="action/formAction.php" method="get" id="formulario2">
                        <h1 style="text-align: center;">GET</h1>
                        <label for="">Nombre :</label><br>
                        <input class="form-control ancho-input" type="text" name="nombre" id="" style="display:block" placeholder="Nombre">
                        <label for="">Apellido :</label><br>
                        <input class="form-control ancho-input" type="text" name="apellido" id="" style="display:block" placeholder="Apellido">
                        <label for="">Edad :</label><br>
                        <input class="form-control ancho-input" type="number" name="edad" id="" style="display:block" placeholder="Edad">
                        <label for="">Direcion :</label><br>
                        <input class="form-control ancho-input" type="text" name="direccion" id="" style="display:block" placeholder="Direccion">
                        <button type="submit" class="boton">Enviar</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
      <div class="fotosPostGet">
        <div class="row  mt-5">
                <div class="col" id="postfoto">
                  <h1>POST</h1>
                  <img src="../../../imagenes/form3Post.png" alt="" class="img-codigo">
                </div>
        </div>
        <div class="row  mt-5" id="getfoto">
                <div class="col">
                  <h1>GET</h1>
                  <img src="../../../imagenes/form3Get.png" alt="" class="img-codigo">
                </div>
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
    <li>Valentin Bustos Villar </li>

  </ul>
</div>

<div class="row" style="margin-right: 50px; margin-top:10px;">
  <div class="col">
    <p class="text-light mt-5">Programacion Web Dinamica 2024 @</p>
  </div>

</div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="../vista/assets/validar.js"></script>

</body>
</html>