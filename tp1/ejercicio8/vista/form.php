
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
    <nav class="container-fluid d-flex justify-content-start border border-secondary rounded text-center">

      <a class="navbar-brand" href="index.html">
        <img src="https://cdn-icons-png.flaticon.com/512/8216/8216616.png" alt=""></a>
        
      <div class="dropdown me-2">
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

      <div class="dropdown me-2">
        <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Practico 2
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="../../../tp2/ejercicio3/vista/form.php">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="../../../tp2/ejercicio4/vista/form.php">ejercicio 2</a></li>
        </ul>
      </div>

      <div class="dropdown me-2">
        <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Practico 3
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="../../../tp3/ejercicio1/vista/form.php">ejercicio 1</a></li>
          <li><a class="dropdown-item" href="../../../tp3/ejercicio2/vista/form.php">ejercicio 2</a></li>
        </ul>
      </div>
    </nav>
    
    <div class=""> 
      <img src="../imagenes/pedco.jpg" alt="">
      <img src="../imagenes/githubLogo.p" alt="">
      
    </div>
    
  </header>

  
 <main class="container" style="min-height:600px; background-color : rgb(85 153 254)">

      <div class="row ">

            <div class="col">
                <h1>Consigna: 8</h1>
                <p>
                    La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                    función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                    clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                    formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                    Agregar un botón para limpiar el formulario y volver a consultar. </p>
            </div>
        </div>

        <div class="row  mt-5">
            <div class="col">
                <h1>Resolucion:</h1>
                <h1>Cinem@s</h1>
                <form action="formAction.php" method="post">

                    <label for="">Ingrese la edad</label>
                    <input type="text" name="edad" id="">

                    <select name="selects" id="">
                        <option value="ninguno">ninguno</option>
                        <option value="estudiante">estudiante</option>
                    </select>

                    <input type="submit" name="" id="">
                    <input type="reset" name="" id="">

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

 <footer class="container-fluid d-flex justify-content-between bg-dark shadow-lg margin-top: 30%">

<div class="row text-light">
  <ul class="" style="list-style-type: none; padding-left: 60px; padding-top: 30px; ">
    <li>Diego Rios</li>
    <li>Miguel Soto</li>
    <li>Juan Cruz Geslowski </li>
    <li>Barquito </li>

  </ul>
</div>

<div class="row" style="margin-right: 50px; margin-top:10px;">
  <div class="col">
    <p class="text-light">Programacion Web Dinamica 2024 @</p>
  </div>

</div>
</footer>

</body>
</html>